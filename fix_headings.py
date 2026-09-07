import re

def fix_file(filename):
    with open(filename, 'r') as f:
        content = f.read()

    # Convert <h3>...</h3> to <div class="... text-lg font-bold ...">...</div>
    content = re.sub(r'<h3([^>]*)>(.*?)</h3>', r'<p\1>\2</p>', content)
    content = re.sub(r'<h4([^>]*)>(.*?)</h4>', r'<p\1>\2</p>', content)
    
    with open(filename, 'w') as f:
        f.write(content)

fix_file("includes/header-v2.php")
fix_file("includes/header.php")
fix_file("includes/footer.php")

print("Fixed headings in headers and footer")
