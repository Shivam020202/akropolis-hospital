import re

def fix_file(filename, h2_text):
    with open(filename, 'r') as f:
        content = f.read()

    # If it doesn't already have an sr-only H2, add it right after the H1
    if "sr-only" not in content or "h2" not in content:
        # Find </h1>
        content = re.sub(r'(<h1[^>]*>.*?</h1>)', r'\1\n        <h2 class="sr-only">' + h2_text + '</h2>', content, count=1, flags=re.DOTALL)
        with open(filename, 'w') as f:
            f.write(content)
        print(f"Fixed {filename}")

fix_file("doctor-profile.php", "Doctor Profile Overview")
fix_file("blog/posts/single-blog.php", "Article Content")
