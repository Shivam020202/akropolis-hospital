import os
import glob
import re

def shorten_title(title):
    # Remove quotes
    title = title.strip("'\"")
    original = title
    
    # Simple shortening rules
    # "Best Cardiology Hospital in Gurugram | Heart Care - Akropolis Hospital" -> "Best Cardiology Hospital Gurugram | Akropolis"
    title = title.replace("Super Speciality ", "")
    title = title.replace(" - Akropolis Hospital", " | Akropolis")
    title = title.replace(" | Akropolis Hospital Gurugram", " | Akropolis")
    title = title.replace(" | Akropolis Hospital", " | Akropolis")
    title = title.replace(" in Gurugram", " Gurugram")
    title = title.replace(" | Gurugram", "")
    
    # If it's still > 60 chars, aggressively trim
    if len(title) > 60:
        parts = title.split(" | ")
        if len(parts) > 2:
            # e.g., Best Nephrology & Kidney Hospital Gurugram | Dialysis | Akropolis
            title = f"{parts[0]} | Akropolis"
            
    if len(title) > 60:
        # Just truncate the first part
        parts = title.split(" | ")
        if len(parts) > 1:
            first = parts[0]
            if len(first) > 45:
                first = first[:45] + "..."
            title = f"{first} | Akropolis"
            
    return f"'{title}'"

# Process root PHP files
for f in glob.glob("*.php"):
    with open(f, 'r') as file:
        content = file.read()
        
    def replacer(match):
        old_title = match.group(1)
        new_title = shorten_title(old_title)
        return f"$page_title = {new_title};"
        
    new_content = re.sub(r"\$page_title\s*=\s*(['\"].*?['\"]);", replacer, content)
    
    if new_content != content:
        with open(f, 'w') as file:
            file.write(new_content)
        print(f"Updated {f}")

