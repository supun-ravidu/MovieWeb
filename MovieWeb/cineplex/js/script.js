document.addEventListener("DOMContentLoaded", function() {
    // Check if the "get started" button exists
    var getStartedButton = document.querySelector('.btn[href="#category"]');
  
    if (getStartedButton) {
      getStartedButton.addEventListener('click', function(e) {
        e.preventDefault(); // Prevent default anchor behavior
  
        var movieListingSection = document.querySelector('#Movielisting');
        
        if (movieListingSection) {
          // Smooth scroll to the Movie listing section
          movieListingSection.scrollIntoView({ behavior: 'smooth' });
        }
      });
    }
  });

  document.addEventListener("DOMContentLoaded", function() {
    var searchInput = document.querySelector('.search-input');
    var searchButton = document.querySelector('.search-btn');

    // Existing code for the 'get started' button
    var getStartedButton = document.querySelector('.btn[href="#category"]');
    if (getStartedButton) {
        getStartedButton.addEventListener('click', function(e) {
            e.preventDefault();
            var movieListingSection = document.querySelector('#Movielisting');
            if (movieListingSection) {
                movieListingSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    }

    // Search functionality
    if (searchButton) {
        searchButton.addEventListener('click', function() {
            var searchText = searchInput.value.toLowerCase();
            var elements = document.querySelectorAll('h3, p, h2'); // Add more selectors if needed

            for (var i = 0; i < elements.length; i++) {
                if (elements[i].textContent.toLowerCase().includes(searchText)) {
                    elements[i].scrollIntoView({ behavior: 'smooth', block: 'center' });
                    break; 
                }
            }
        });
    }
});




  
  