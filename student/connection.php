<?php
$conn = mysqli_connect('localhost', 'root', '', 'aeha');
if (!$conn) {
?>
    <script>
        alert('Database is not connected')
    </script>
<?php
} else {
?>
    <script>
        alert("Database connected Successfully");
    </script>
<?php
}
?>