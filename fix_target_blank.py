import re
import glob

def add_noopener(match):
    # If it already has rel=, don't touch it to avoid duplicate rels
    full_link = match.group(0)
    if 'rel=' in full_link:
        return full_link
    # Inject rel="noopener noreferrer" right before the closing >
    return full_link.replace('>', ' rel="noopener noreferrer">')

# We want to match <a ... target="_blank" ... >
files = glob.glob("**/*.php", recursive=True) + glob.glob("**/*.html", recursive=True)

for file in files:
    with open(file, 'r') as f:
        content = f.read()

    new_content = re.sub(r'<a[^>]*target=[\'"]_blank[\'"][^>]*>', add_noopener, content, flags=re.IGNORECASE)

    if new_content != content:
        with open(file, 'w') as f:
            f.write(new_content)
        print(f"Fixed target='_blank' in {file}")

