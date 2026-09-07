with open("css/styles.css", "r") as f:
    content = f.read()

content = content.replace("#328CCB", "#1E3A8A")
content = content.replace("rgba(50, 140, 203,", "rgba(30, 58, 138,")
content = content.replace("#2a7bb5", "#1E40AF") # slightly lighter/different primary hover -> maybe use #1e3a8a or #172554 (blue-950)
content = content.replace("#D66C43", "#EA580C")
content = content.replace("rgba(214, 108, 67,", "rgba(234, 88, 12,")
content = content.replace("#c55a36", "#C2410C")

# Add Outfit to the h1, h2, h3 rule
content = content.replace("font-family: 'Poppins',", "font-family: 'Outfit', 'Poppins',")

# Add glass-premium class
premium_glass = """
/* Premium Glassmorphism */
.glass-premium {
  background: linear-gradient(135deg, rgba(255, 255, 255, 0.95) 0%, rgba(255, 255, 255, 0.75) 100%);
  backdrop-filter: blur(24px);
  -webkit-backdrop-filter: blur(24px);
  border: 1px solid rgba(255, 255, 255, 0.8);
  box-shadow: 
    0 10px 40px -10px rgba(30, 58, 138, 0.15),
    inset 0 1px 0 rgba(255, 255, 255, 0.9);
}
"""

if ".glass-premium" not in content:
    content += premium_glass

with open("css/styles.css", "w") as f:
    f.write(content)

print("Styles updated")
