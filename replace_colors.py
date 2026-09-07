import glob

def replace_in_file(filepath):
    with open(filepath, "r") as f: content = f.read()
    
    # Primary color
    content = content.replace("#328CCB", "#1E3A8A")
    content = content.replace("#328ccb", "#1E3A8A")
    content = content.replace("#2a7bb5", "#1E40AF")
    
    # Secondary color
    content = content.replace("#D66C43", "#EA580C")
    content = content.replace("#d66c43", "#EA580C")
    content = content.replace("#c55a36", "#C2410C")
    
    with open(filepath, "w") as f: f.write(content)

for f in glob.glob("**/*.php", recursive=True):
    replace_in_file(f)

print("Colors globally replaced")
