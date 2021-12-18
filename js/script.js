function Search(event) {
    
    $.ajax({
      type: 'POST',
      url: '../search.php',
      data: {
        text: event.target.value,
      },
      beforeSend: function () {},
      success: function (response) {
        responseProcessed = JSON.parse(response);
        console.log({responseProcessed});
        if (responseProcessed.data.length > 0) {
          document.getElementById('cards-container').innerHTML = '';
          responseProcessed.data.map((element) => handleTemplate(element));
        } else {
          alert('No se encontró nada')
        }
      },
      error: function (err) {
        console.log(err);
      },
    });
  }

const handleTemplate = (data) => {
  const template = document.querySelector('#catalog-template').content;
  const container_tarjetas = document.querySelector('#cards-container');

  const card_title = template.querySelector('#card-title');
  card_title.textContent = data.name;

  const card_desc = template.querySelector('.card-desc');
  card_desc.textContent = data.description;

  let image = template.querySelector('.card-img')
  image.setAttribute('src', data.image);

  const clone = template.cloneNode(true);
  container_tarjetas.appendChild(clone);

}