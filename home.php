<div class="content">
    <h1 class="text-center mt-3">Home Page<h1>
    <?php if(isset($_SESSION["userId"])): ?>
        <h3 class="text-center mt-3">Hello <?= htmlspecialchars($_SESSION["name"]) ?></h3>
    <?php endif; ?>
    <div style="height=80px; width: 100px; color:white; font-size:2rem;">
    <p>
    Home page content</p>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.5115795957554!2d106.65532687490762!3d10.77207498937643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ec3c161a3fb%3A0xef77cd47a1cc691e!2sHo%20Chi%20Minh%20City%20University%20of%20Technology%20(HCMUT)!5e0!3m2!1sen!2s!4v1683709535256!5m2!1sen!2s" 
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
