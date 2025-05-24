<?php
session_start();

ob_start();
$styleSheet = '<link rel="stylesheet" href="Public/Css/diploma.css">';
?>
<div class="getDiploma" id="contact">
    <div class="container">
        <div class="title">
            <h1>Get You Diploma</h1>
            <p>If you don't find you id contact us</p>
        </div>
        <div class="contact">
            <h1>Fostering Tech Talents , Growing Tomorrow’s Leaders</h1>
            <div class="card">
                <form action="index.php?page=downloadDiploma" method="post">
                    <div class="logo">
                        <img src="Public/Assest/Images/logo_technofoster.png" alt="logo_technofoster">
                    </div>
                    <p>Bac id:</p>
                    <input type="number" name="student_id" id="student_id" placeholder="Enter your Bac Id">
                    <?php if (isset($_SESSION['error_message'])): ?>
                        <div class="error">
                            <?= htmlspecialchars($_SESSION['error_message']) ?>
                        </div>
                        <?php unset($_SESSION['error_message']); ?>
                    <?php endif; ?>
                    <button type="submit" class="sendBtn">Download The Diploma</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();

include __DIR__ . '/../../templates/layout.php';

?>