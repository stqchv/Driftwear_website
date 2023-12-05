function addToCart() {
    // Pobierz dane produktu (możesz dostosować te dane do swoich potrzeb)
    const productName = document.getElementById('product').getAttribute('data-name');
    const productPrice = document.getElementById('product').getAttribute('data-price');
    const productSize = selectedSize;
  
    // Utwórz obiekt FormData i dodaj dane produktu
    const formData = new FormData();
    formData.append('productName', productName);
    formData.append('productPrice', productPrice);
    formData.append('productSize', productSize);
  
    // Utwórz obiekt XMLHttpRequest
    const xhr = new XMLHttpRequest();
  
    // Ustaw metodę i endpoint
    xhr.open('POST', 'addToCart.php', true);
  
    // Ustaw callback dla zdarzenia 'load'
    xhr.onload = function() {
      if (xhr.status === 200) {
        // Obsłuż odpowiedź z serwera (możesz dodać tutaj odpowiednią obsługę)
        console.log(xhr.responseText);
      }
    };
  
    // Wyślij żądanie z danymi produktu
    xhr.send(formData);
  }