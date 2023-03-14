<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand me-2" href="https://mdbgo.com/">
      <img
        src="imagem/EkePreto.png"
        height="40"
        alt="MDB Logo"
        loading="lazy"
        style="margin-top: -1px;"
        class="rounded-circle";
      />
    </a>

   <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="cad_cliente.php">Cadastro Cliente <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cad_produtos.php">Cadastro Produto</a>
        </li>
      </ul>

      <div class="d-flex align-items-center">
        <img 
            src="imagem/";
            height="40";
            class="rounded-circle";
        />
        <a href="logout.php"> <?php echo $_SESSION["cli_cpf"]; ?> [ Sair ]</a>
      </div>
    </div>
  </div>
</nav>