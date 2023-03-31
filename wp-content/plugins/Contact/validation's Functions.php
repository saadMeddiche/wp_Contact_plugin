<?php
function contact_form_validation($inputs)
{
    $errors = array();

    $errors = array_merge($errors, empty_fields($inputs));

    $errors = array_merge($errors, regex_validation());

    return $errors;
}

function empty_fields($arr)
{

    $errors = [];

    for ($i = 0; $i < count($arr); $i++) {

        if (empty($_POST[$arr[$i]])) {
            $text = 'Please Fill the ' . $arr[$i] . ' Field';
            array_push($errors, $text);
        }
    }

    return $errors;
}

function regex_validation()
{
    $errors = [];

    if (!preg_match('/^[A-Za-z\s]{2,}$/', $_POST['Name']) && $_POST['Name']) {
        $text = 'Please Make sure that the name field only contain A-Z,a-z,space';
        array_push($errors, $text);
    }

    if (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $_POST['Email']) && $_POST['Email']) {
        $text = 'Please Make sure that the email field respect the terms of an email';
        array_push($errors, $text);
    }

    if (!preg_match('/^[A-Za-z0-9\s]{2,}$/', $_POST['Subject']) &&  $_POST['Subject']) {
        $text = 'Please Make sure that the subject field only contain A-Z,a-z,space';
        array_push($errors, $text);
    }

    if (!preg_match('/^[A-Za-z0-9\s.,!?]{2,}$/', $_POST['Message']) && $_POST['Message']) {
        $text = 'Please Make sure that the message field only contain A-Z,a-z,space';
        array_push($errors, $text);
    }

    return $errors;
}

function display_errors($errors)
{
    echo "<div class='errors'>";
    for ($i = 0; $i < count($errors); $i++) {
        echo "<p>" . $errors[$i] . '</p>';
    }
    echo "</div>";
}

function display_success_popup()
{
?>
    <script>
        document.getElementById('Popup').style.display = 'block';

        setTimeout(function() {
            document.getElementById('Popup').style.display = 'none';
        }, 5000);
    </script>
<?php
}
