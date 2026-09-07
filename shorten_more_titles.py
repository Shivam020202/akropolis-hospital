import os
import glob
import re

def shorten_title(title):
    title = title.strip("'\"")
    original = title
    
    title = title.replace("Super Speciality ", "")
    title = title.replace(" - Akropolis Hospital", " | Akropolis")
    title = title.replace(" | Akropolis Hospital Gurugram", " | Akropolis")
    title = title.replace(" | Akropolis Hospital", " | Akropolis")
    title = title.replace(" in Gurugram", " Gurugram")
    title = title.replace(" | Gurugram", "")
    
    if len(title) > 60:
        parts = title.split(" | ")
        if len(parts) > 1:
            first = parts[0]
            if len(first) > 45:
                first = first[:45] + "..."
            title = f"{first} | Akropolis"
            
    return f"'{title}'"

files_to_check = glob.glob("components/*.php")
files_to_check.append("components/doctor-template.php")
# blogs
files_to_check.append("blog/posts/blogs.php")

for f in set(files_to_check):
    if not os.path.exists(f): continue
    with open(f, 'r') as file:
        content = file.read()
        
    def replacer(match):
        old_title = match.group(1)
        # only process if it's a hardcoded string
        if old_title.startswith("'") or old_title.startswith('"'):
            new_title = shorten_title(old_title)
            return f"$page_title = {new_title};"
        return match.group(0)
        
    new_content = re.sub(r"\$page_title\s*=\s*(['\"].*?['\"]);", replacer, content)
    
    # for doctor-template
    if f == "components/doctor-template.php":
        new_content = new_content.replace(
            "$page_title = $doctor['name'] . ' | ' . $doctor['specialization'] . ' | Akropolis Hospital Gurugram';",
            "$page_title = $doctor['name'] . ' | ' . $doctor['specialization'] . ' | Akropolis';"
        )
        
    if new_content != content:
        with open(f, 'w') as file:
            file.write(new_content)
        print(f"Updated {f}")
        
    # For blogs.php we have 'title' => '...', which isn't $page_title
    if f == "blog/posts/blogs.php":
        # Let's read the file and shorten 'title' if > 60
        # Actually blog titles shouldn't be too aggressively cut because they are the h1.
        # But if they are SEO page titles, they are used there. We'll leave blogs for now.
        pass

