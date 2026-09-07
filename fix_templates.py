import os
import glob
import re

templates = glob.glob("components/*-template.php")

for t in templates:
    with open(t, "r") as f: content = f.read()
    
    # The feature boxes have <h3 class="font-bold text-gray-900 mb-2">...</h3>
    # Let's replace them with <p class="text-lg font-bold text-gray-900 mb-2">
    content = re.sub(r'<h3 class="font-bold text-gray-900 mb-2">(.*?)</h3>', r'<p class="text-lg font-bold text-gray-900 mb-2">\1</p>', content)
    
    # There are also <h3> elements like: <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center space-x-2">
    # If they appear before the H2, we need to fix them. But wait, in the template, the structure is:
    # H1
    # 4 feature boxes (were H3, now P)
    # H2 "Expert [Specialist] in [District]"
    # H3 "Serving Near [District]"
    # H3 "Conditions We Treat"
    # H2 "Meet Our Expert..."
    # So the later H3s are correctly after an H2! Only the feature boxes were before an H2.

    with open(t, "w") as f: f.write(content)

print("Fixed templates.")
