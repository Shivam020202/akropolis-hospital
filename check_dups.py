import os
import glob
import re

descriptions = {}

files_to_check = glob.glob("*.php")

for f in files_to_check:
    if not os.path.exists(f): continue
    with open(f, 'r') as file:
        content = file.read()
        
    match = re.search(r"\$page_description\s*=\s*(['\"].*?['\"]);", content)
    if match:
        desc = match.group(1)
        if desc in descriptions:
            descriptions[desc].append(f)
        else:
            descriptions[desc] = [f]

for desc, files in descriptions.items():
    if len(files) > 1:
        print(f"DUPLICATE DESC ({len(files)} files): {desc}")
        for file in files:
            print(f"  - {file}")

