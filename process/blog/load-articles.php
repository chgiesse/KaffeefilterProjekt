<?php
// Hier wird eine Übersicht aller Blog Artikel in eine Tabelle geladen

    $query = $conn->query("SELECT * FROM blog_articles AS b
                           JOIN images AS i
                           ON b.thumbnail_img = i.img_id") or die ($conn->error);

    $queryCount = $query->num_rows; // count the output amount

  if($queryCount > 0){
             //fetch results set as object and output HTML
             while($obj = $query->fetch_object())
             {
             echo <<<EOT
            <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success">{$obj->category}</strong>
                <h3 class="mb-0">{$obj->title}</h3>
                <div class="mb-1 text-muted">{$obj->created_at}</div>
                <p class="mb-auto">{$obj->short_descr}</p>
                <a href="blog-single.php?id={$obj->blog_id}" class="stretched-link">Jetzt lesen...</a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <img src="../{$obj->img_directory}{$obj->img_name}" width="200" height="250" alt="Blog Artikel">
              </div>
            </div>
          </div>
EOT;
           }}
?>   