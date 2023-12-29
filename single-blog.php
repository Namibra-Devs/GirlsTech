<?php include('./admin/database/config.php') ?>
<?php
$id = $_REQUEST['id'];
$statement = $pdo->prepare("SELECT * FROM tbl_blogs WHERE blog_id = ?");
$statement->execute(array($id));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $row) {
    $blog_content = $row['blog_content'];
}

?>

<?php include('./include/header.php') ?>
<main>
    <section style="padding: 50px">
        <?php echo $blog_content; ?>
    </section>
</main>

<?php include('./include/footer.php') ?>