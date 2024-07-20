
<?php
$title ='About';
require_once './includes/header.php';
echo "<h2>About Our Web Design & Development Course</h2>";
echo "<p>A Web Design & Development Course
typically refers to an educational program or training focused on teaching individuals the skills
and knowledge necessary to create and maintain websites.
These courses are designed to equip students with both the technical and
creative skills required in the field of web design and development.</p>";

$team_members = [
    ["name" => "Anjaly", "role" => "Lead Instructor", "bio" => "Anjaly has over 10 years of experience in web development."],
    ["name" => "Nancy", "role" => "Assistant Instructor", "bio" => "Nancy specializes in front-end development and UX design."]
];

echo "<h3>Meet Our Team</h3>";
foreach ($team_members as $member) {
    echo "<h4>{$member['name']}</h4>";
    echo "<p><strong>Role:</strong> {$member['role']}</p>";
    echo "<p>{$member['bio']}</p>";
}

$testimonials = [
    ["name" => "Alice", "feedback" => "This course was amazing! I learned so much."],
    ["name" => "Bob", "feedback" => "The instructors were very knowledgeable and helpful."]
];

echo "<h3>What Our Students Say</h3>";
foreach ($testimonials as $testimonial) {
    echo "<p><strong>{$testimonial['name']}:</strong> {$testimonial['feedback']}</p>";
}

$pdfPath = "/Project/content/Lecture3-Intro to HTML.pdf";
echo "<h3> INTRODUCTION TO HTML </h3>";
echo "<p><a href='{$pdfPath}' target='_blank'>INTRODUCTION TO HTML</a></p>";
$pdfPath = "/Project/content/CSS.pdf";
echo "<h3>CSS</h3>";
echo "<p><a href='{$pdfPath}' target='_blank'>CSS</a></p>";
?>

