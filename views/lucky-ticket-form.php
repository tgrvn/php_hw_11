<section>
    <h3>lucky ticket</h3>
    <form method="POST" action="./api/lucky-ticket.php">
        <input type="text" name="min" placeholder="min" required>
        <input type="text" name="max" placeholder="max" required>
        <?php if (isset($_SESSION["ticket-error"])) { ?>
            <span class="error"><?= $_SESSION["ticket-error"] ?></span>
        <?php } ?>
        <input type="submit" name="ticket" value="send ticket">
    </form>
</section>