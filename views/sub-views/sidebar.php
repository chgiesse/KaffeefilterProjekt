<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
         
          <!-- Blog verwalten -->
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Blog</span>
            <a class="d-flex align-items-center text-muted" href="../blog/blog-add.php" aria-label="Neuen Artikel hinzufügen">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>

          <li class="nav-item">
          <a class="<?php echo ($activePage == "blog-add") ? "nav-link active" : "nav-link"; ?>" href="../blog/blog-add.php">
              <span data-feather="edit"></span>
              Artikel hinzufügen
            </a>
          </li>
          <li class="nav-item">
          <a class="<?php echo ($activePage == "blog-manage") || ($activePage == "blog-edit") ? "nav-link active" : "nav-link"; ?>" href="../blog/blog-manage.php">
              <span data-feather="file"></span>
              Artikel verwalten
            </a>
          </li>

        <!-- Shop verwalten -->
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Produkte</span>
          <a class="d-flex align-items-center text-muted" href="../product/product-add.php" aria-label="Neues Produkt hinzufügen">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
          <li class="nav-item">        
            <a class="<?php echo ($activePage == "product-add") ? "nav-link active" : "nav-link"; ?>" href="../product/product-add.php">
              <span data-feather="file-plus"></span>
              Produkt hinzufügen
            </a>
          </li>
          <li class="nav-item">        
          <a class="<?php echo ($activePage == "product-manage") || ($activePage == "product-edit") ? "nav-link active" : "nav-link"; ?>" href="../product/product-manage.php">
            <span data-feather="shopping-cart"></span>
              Produkte verwalten
            </a>
          </li>

          <li class="nav-item">        
            <a class="<?php echo ($activePage == "product-attributes") ? "nav-link active" : "nav-link"; ?>" href="../product/product-attributes.php">
            <span data-feather="layers"></span>
              Attribute einsehen
            </a>
          </li>          

            <!-- Einstellungen verwalten -->
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Einstellungen</span>
            </h6>

            <li class="nav-item">
              <a class="<?php echo ($activePage == "user-add") ? "nav-link active" : "nav-link"; ?>" href="../login/user-add.php">
                <span data-feather="user"></span>
                Benutzerverwaltung
              </a>
            </li>
        </ul>
      </div>
    </nav>
