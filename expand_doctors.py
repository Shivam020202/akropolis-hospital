import re

with open('includes/data.php', 'r') as f:
    content = f.read()

# We need to find the 'bio' => '...', and append the generic text.
# The generic text is:
generic_bio = " Dr. {name} is an integral part of the Akropolis Super Speciality Hospital team. With a strong commitment to patient care and clinical excellence, Dr. {name} brings extensive experience in diagnosing and treating a wide range of complex conditions. Patients consistently praise the doctor's compassionate approach, clear communication, and dedication to personalized treatment plans. At Akropolis Hospital, our specialists work collaboratively using state-of-the-art diagnostic tools and advanced surgical techniques to ensure the best possible outcomes. Dr. {name} actively participates in continuing medical education and stays abreast of the latest advancements in the field to provide evidence-based, world-class healthcare. Whether managing chronic conditions, performing intricate procedures, or offering preventive health advice, Dr. {name} prioritizes the overall well-being and safety of every patient. The doctor is available for consultations throughout the week. We encourage patients to book an appointment early to discuss their health concerns in a supportive, patient-centric environment. Trust your health with our expert team, where your recovery and long-term wellness are our primary goals."

def replacer(match):
    full_match = match.group(0)
    name_match = re.search(r"'name'\s*=>\s*'([^']+)'", full_match)
    if not name_match:
        return full_match
    name = name_match.group(1).replace("Dr. ", "")
    
    bio_text = generic_bio.replace("{name}", name)
    
    # Now replace the end of the bio string with the appended text
    # Finding 'bio' => '...'
    def bio_replacer(bio_match):
        old_bio = bio_match.group(1)
        # Avoid appending multiple times if run twice
        if "integral part of the Akropolis" in old_bio:
            return bio_match.group(0)
        new_bio = old_bio + bio_text
        return f"'bio' => '{new_bio}'"
        
    new_match = re.sub(r"'bio'\s*=>\s*'([^']+)'", bio_replacer, full_match)
    return new_match

# Doctors are defined as arrays inside $doctors = [ ... ];
# We can just match the block for each doctor.
# A doctor block starts with [ and ends with ], and contains 'name' =>
parts = content.split("'id'")
new_parts = [parts[0]]

for part in parts[1:]:
    name_match = re.search(r"'name'\s*=>\s*'([^']+)'", part)
    if name_match:
        name = name_match.group(1).replace("Dr. ", "")
        bio_text = generic_bio.replace("{name}", name)
        
        def bio_replacer(bio_match):
            old_bio = bio_match.group(1)
            if "integral part of the Akropolis" in old_bio:
                return bio_match.group(0)
            new_bio = old_bio + bio_text
            return f"'bio' => '{new_bio}'"
            
        part = re.sub(r"'bio'\s*=>\s*'([^']+)'", bio_replacer, part)
    new_parts.append(part)

new_content = "'id'".join(new_parts)

with open('includes/data.php', 'w') as f:
    f.write(new_content)
print("Updated data.php")
