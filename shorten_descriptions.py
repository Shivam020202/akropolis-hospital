import os
import glob
import re

def shorten_description(desc):
    desc = desc.strip("'\"")
    # If the description is too long, we truncate to around 150 chars at a word boundary
    if len(desc) > 155:
        # truncate to 152 and add "..."
        shortened = desc[:152]
        # try to cut at the last space
        last_space = shortened.rfind(" ")
        if last_space > 100:
            shortened = shortened[:last_space]
        shortened = shortened + "..."
        # if there's any stray double quotes, escape them or use single quotes
        return f"'{shortened}'"
    return f"'{desc}'"

files_to_check = glob.glob("*.php") + glob.glob("components/*.php")

for f in set(files_to_check):
    if not os.path.exists(f): continue
    with open(f, 'r') as file:
        content = file.read()
        
    def replacer(match):
        old_desc = match.group(1)
        # only process if it's a hardcoded string
        if old_desc.startswith("'") or old_desc.startswith('"'):
            new_desc = shorten_description(old_desc)
            return f"$page_description = {new_desc};"
        return match.group(0)
        
    new_content = re.sub(r"\$page_description\s*=\s*(['\"].*?['\"]);", replacer, content)
    
    if new_content != content:
        with open(f, 'w') as file:
            file.write(new_content)
        print(f"Updated {f}")

