import os
import glob
import re

def process_file(filepath):
    with open(filepath, "r") as f:
        content = f.read()

    # Find all h2 tags
    # We want to replace <h2...> with <h3...> and </h2> with </h3> for all but the first instance
    
    # Let's find all <h2 and </h2> positions
    h2_starts = [m.start() for m in re.finditer(r'<h2\b[^>]*>', content, re.IGNORECASE)]
    
    if len(h2_starts) <= 1:
        return # No multiple h2s

    # Keep the first h2, replace the rest
    first_h2_end = content.find('</h2>', h2_starts[0])
    
    if first_h2_end == -1:
        return
        
    prefix = content[:first_h2_end+5]
    suffix = content[first_h2_end+5:]
    
    # Replace all remaining h2s with h3 in the suffix
    new_suffix = re.sub(r'<h2\b([^>]*)>', r'<h3\1>', suffix, flags=re.IGNORECASE)
    new_suffix = re.sub(r'</h2>', r'</h3>', new_suffix, flags=re.IGNORECASE)
    
    new_content = prefix + new_suffix
    
    if new_content != content:
        with open(filepath, "w") as f:
            f.write(new_content)
        print(f"Fixed multiple H2s in {filepath}")

# We should do this on the root PHP files, and the templates, and then regenerate.
for f in glob.glob("*.php"):
    if f.startswith("generate-"):
        continue
    process_file(f)

for f in glob.glob("components/*-template.php"):
    process_file(f)

# Also fix blogs
for f in glob.glob("blog/**/*.php", recursive=True):
    process_file(f)

print("Template fixes applied.")
