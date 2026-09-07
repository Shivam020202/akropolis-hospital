import glob

def revert_colors(filepath):
    with open(filepath, "r") as f: content = f.read()
    
    # Revert Primary color
    content = content.replace("#1E3A8A", "#328CCB")
    content = content.replace("#1E40AF", "#2a7bb5")
    
    # Revert Secondary color
    content = content.replace("#EA580C", "#D66C43")
    content = content.replace("#C2410C", "#c55a36")
    
    with open(filepath, "w") as f: f.write(content)

for f in glob.glob("**/*.php", recursive=True):
    revert_colors(f)

print("Colors reverted globally")
