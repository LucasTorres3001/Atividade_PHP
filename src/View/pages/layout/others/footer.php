            </section>
            <footer>
                <center>
                    <p>
                        <?php
                            $meses = array(
                                'JAN','FEV','MAR','ABR','MAI','JUN','JUL','AGO','SET','OUT','NOV','DEZ'
                            );
                            $day = date('d');
                            $year = date('Y');
                            $date = "{$day} / {$meses[date('m') - 1]} / {$year}";

                            echo $date;
                        ?>
                    </p>
                    <p>&copy; <em>by <strong>Lucas Torres</strong></em></p>
                </center>
            </footer>
        </main>
    </body>
</html>