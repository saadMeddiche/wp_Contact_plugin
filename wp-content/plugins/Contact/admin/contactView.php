<?php
include plugin_dir_path(__FILE__) . 'Functions.php';

$messages = fetche_data_message();

?>

<div class="Body">

  <button class="Buttonn" onclick="toggleInformations()">
    <p>Documentation</p>
  </button>

  <div class="Informations" id="informations">

    <div class="Description">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet et accusantium exercitationem. Officiis eos aspernatur, optio tempore qui nostrum! Nemo, corporis. Rerum, quod? Obcaecati natus neque eligendi enim dolore, perspiciatis omnis consequatur iusto quibusdam et. Velit repellat eligendi possimus culpa, tenetur cumque sit pariatur ullam dignissimos ipsam quam odio accusamus vel. Pariatur odio harum alias nesciunt cumque expedita eos blanditiis consequatur mollitia enim. Neque voluptas itaque atque dolorum porro ratione laboriosam facilis voluptatem et asperiores voluptatibus delectus, magni eos ut laudantium alias harum beatae odit, laborum, recusandae dolore nihil dicta? Praesentium accusantium vel doloribus, officiis ea culpa sequi quo pariatur at repellat. Laudantium molestiae dolorum natus repellendus nostrum incidunt maxime, aliquam magni voluptatum fugit vero, animi consequuntur quasi cumque magnam sint! Aspernatur illum eveniet consequatur corrupti asperiores architecto laborum cum temporibus iure quidem fugit praesentium unde, rerum debitis neque eligendi voluptatem, accusantium nam. Reprehenderit officia iusto aspernatur neque totam corrupti odio delectus magni nesciunt doloribus commodi qui quod autem, porro sequi necessitatibus aperiam illum labore beatae quaerat est doloremque vel quo optio? Eaque iure aliquid temporibus quidem vel nobis illum quasi facilis id necessitatibus quos recusandae quaerat nam repellendus ipsum, provident, autem eos fugit nihil. Nulla hic minima aliquid sequi!</p>
    </div>

    <div class="ShortCodes">
      <pre>
        <p>ShortCode Of The Form  >> [contactTheWorld]</p>
        <p>ShortCode Of The PopUp >> [ContactPoPUp]</p>
        <pre>
    </div>

  </div>


  <div class="Messages">
      <?php foreach ($messages as $message) : ?>
        <div class="Message">
          <div class="Name">
              <p><?php echo $message->name ?></p>
          </div>

          <div class="Email">
              <p><?php echo $message->email ?></p>
          </div>

          <div class="Sujet">
              <p><?php echo $message->subject ?></p>
          </div>

          <div class="Content">
              <p><?php echo $message->message ?></p>
          </div>
        </div>
              
      <?php endforeach ?>
  </div>
</div>

<script>
     function toggleInformations() {
        var informations = document.getElementById("informations");
        informations.classList.toggle("hidden");
    }
</script>

<style>
  .Buttonn{
    margin-top: 10px;
    cursor: pointer;
  }
  .Messages {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
  }

  .Message {
    border: 1px solid #ccc;
    padding: 10px;
    margin: 10px;
    width: 40%;
    height: 200px;
    border-radius: 5px;
  }

  .Name {
    font-weight: bold;
    margin-bottom: 5px;
  }

  .Email {
    margin-bottom: 5px;
  }

  .Sujet {
    font-style: italic;
    margin-bottom: 5px;
  }

  .Content {
    margin-top: 10px;
  }

  .Content p {
    line-height: 1.5;
  }

  .Informations {
    display: flex;
    flex-direction: column;
    gap: 20px;
    padding: 20px;
    margin-top: 10px;
    margin-right: 10px;
    border: 1px solid #ccc;

    opacity: 1;
    max-height: 100%;
    transition: 0.5s;
  }

  .Informations.hidden {
    opacity: 0;
    max-height: 0;
  }

  .Description p {
    font-size: 16px;
    line-height: 1.5;
    color: #333;
  }

  .ShortCodes {
    font-size: 14px;
    line-height: 1.2;
    color: #666;
    background-color: #f9f9f9;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
  }

  .ShortCodes p {
    margin: 0;
  }

  @media(max-width:850px){

    .Message{
      width: 90%;
    }

  }


</style>