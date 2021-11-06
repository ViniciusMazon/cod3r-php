<div class="title">Integração CSS</div>

<h1 center>
  <?php
  echo "Olá";
  echo "<small> small mundo </small>";
  ?>
</h1>

<?= "<div center blue duble>Outra forma de me expressar!</div>" ?>

<div center>
  <button>Ok</button>
</div>

<style>
  button {
    padding: 5px <?= 2 * 10 ?>px;
    background-color: #4286f4;
    color: #fff;
    font-weight: 800;
    border-radius: 6px;
    border: none;
    cursor: pointer;
    height: 40px;
  }

  [center] {
    display: flex;
    justify-content: center;
  }

  [blue] {
    color: #4286f4;
  }

  [duble] {
    font-size: 2rem;
  }
</style>