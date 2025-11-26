<?php include 'views/partials/head.php' ?>


<main class="page-main">
    <h1>Prendre les présences</h1>
    <form action="" method="POST">
        <ul class="student-list">
            <?php foreach (getAllStudents() as $student): ?>
                <li>
                    <input id="<?php echo $student['matricule']; ?>" type="checkbox" name="students[]"
                           value="<?php echo $student['matricule']; ?>">
                    <label for="<?php echo $student['matricule']; ?>"><?php echo $student['first_name']; ?><?php echo $student['last_name']; ?></label>
                </li>
            <?php endforeach; ?>
        </ul>

        <button type="submit">Enregistrer les présences</button>
    </form>
    <button class="randomStudentBtn hidden">Choisir un·e étudiant·e</button>
    <p class="currentStudent hidden"></p>
</main>

<?php include 'views/partials/nav.php' ?>
<?php include 'views/partials/footer.php' ?>

