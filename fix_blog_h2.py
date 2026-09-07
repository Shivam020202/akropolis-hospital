with open("blog/posts/single-blog.php", "r") as f:
    content = f.read()

# Remove sr-only H2 from Blog Not Found branch
content = content.replace("</h1>\n        <h2 class=\"sr-only\">Article Content</h2>", "</h1>")

# Change Consult Our Specialist h3 to h2
content = content.replace("<h3 class=\"text-2xl font-bold mb-2\">\n          <?php echo $lang === 'hi' ? 'विशेषज्ञ से परामर्श लें' : 'Consult Our Specialist'; ?>\n        </h3>", "<h2 class=\"text-2xl font-bold mb-2\">\n          <?php echo $lang === 'hi' ? 'विशेषज्ञ से परामर्श लें' : 'Consult Our Specialist'; ?>\n        </h2>")

with open("blog/posts/single-blog.php", "w") as f:
    f.write(content)

print("Fixed single-blog.php H2s")
