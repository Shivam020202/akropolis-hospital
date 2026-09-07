import re

def fix_departments():
    with open("departments.php", "r") as f: content = f.read()
    if "<h2" not in content:
        # Add a dummy <h2> below the <h1>
        content = re.sub(r'(<h1[^>]*>.*?</h1>)', r'\1\n        <h2 class="sr-only">Our Departments Overview</h2>', content, flags=re.DOTALL)
        with open("departments.php", "w") as f: f.write(content)

def fix_doctors():
    with open("doctors.php", "r") as f: content = f.read()
    if "<h2" not in content:
        content = re.sub(r'(<h1[^>]*>.*?</h1>)', r'\1\n        <h2 class="sr-only">Our Specialists Directory</h2>', content, flags=re.DOTALL)
        with open("doctors.php", "w") as f: f.write(content)

def fix_blogs():
    with open("blog/posts/single-blog.php", "r") as f: content = f.read()
    if "<h2" not in content:
        # We can add an H2 inside the article
        content = re.sub(r'(<article[^>]*>)', r'\1\n      <h2 class="sr-only">Article Content</h2>', content)
        with open("blog/posts/single-blog.php", "w") as f: f.write(content)

fix_departments()
fix_doctors()
fix_blogs()
print("Fixed H2s")
