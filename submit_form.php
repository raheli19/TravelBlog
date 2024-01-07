<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve all form data
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
    $age = isset($_POST["age"]) ? $_POST["age"] : "";
    $experience = isset($_POST["experience"]) ? $_POST["experience"] : "";
    $country = isset($_POST["country"]) ? $_POST["country"] : "";
    $interest = isset($_POST["interest"]) ? $_POST["interest"] : "";
    $contactMethod = isset($_POST["contact-method"]) ? $_POST["contact-method"] : "";
    $message = isset($_POST["message"]) ? $_POST["message"] : "";

    // Format the data as a string
    $formData = "Name: $name\n";
    $formData .= "Email: $email\n";
    $formData .= "Phone: $phone\n";
    $formData .= "Age: $age\n";
    $formData .= "Experience Level: $experience\n";
    $formData .= "Country: $country\n";
    $formData .= "Interest: $interest\n";
    $formData .= "Contact Method: $contactMethod\n";
    $formData .= "Message:\n$message\n\n";

    // Append the data to a text file (you can customize the filename and path)
    $filename = "form_data.txt";
    file_put_contents($filename, $formData, FILE_APPEND | LOCK_EX);

    // Redirect or display a thank you message
    header("Location: thank_you.html");
    exit();
}
?>
