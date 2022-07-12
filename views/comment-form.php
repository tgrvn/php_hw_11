<section>
    <h3>comment</h3>
    <form method="POST" action="./api/comment.php">
        <input type="text" name="phone" placeholder="+38 0XX XXX-XX-XX" required>
        <textarea name="comment" placeholder="comment..." cols="30" rows="10" required></textarea>
        <?php if (isset($_SESSION["error"])) { ?>
            <span class="error">*validation error</span>
        <?php } ?>
        <input type="submit" value="send comment" name="comment-data">
    </form>
</section>