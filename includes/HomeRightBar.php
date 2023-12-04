<!-- Right Bar starts here -->
<div class="col-lg-3">
    <div class="row g-4">

        <!-- Card News START -->
        <div class="col-sm-6 col-lg-12">
            <div class="card rounded-2">
                <!-- Card header START -->
                <div class="card-header pb-0 border-0">
                    <h5 class="card-title mb-0">Latest news</h5>
                    <hr>
                </div>
                <!-- Card header END -->

                <!-- Card body START -->
                <div class="card-body news_body">

                </div>
                <!-- Card body END -->
            </div>
        </div>
        <!-- Card News END -->

        <ul class="nav small mt-4 justify-content-center lh-1">
            <li class="nav-item">
                <a class="nav-link" href="">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="">Support </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="">Docs </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Help</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Privacy &amp; terms</a>
            </li>
        </ul>

        <p class="small text-center mt-1">©2023 <a class="text-reset" target="_blank" href=""> Mingley </a></p>
    </div>
</div>
<!-- Right Bar ends here -->



<script>
    // Make a GET request
    // fetch('https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=289a0309c23545e58ecc4af5a498e419')
    // fetch('https://newsapi.org/v2/top-headlines?country=in&category=technology&apiKey=289a0309c23545e58ecc4af5a498e419') //For tech news in India
    fetch('https://newsapi.org/v2/top-headlines?country=in&apiKey=289a0309c23545e58ecc4af5a498e419')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            const newsContainer = document.querySelector('.news_body');

            // Loop through the articles and create HTML elements for each news item
            data.articles.forEach(article => {
                const newsItem = document.createElement('div');
                newsItem.classList.add('mb-3');
                newsItem.classList.add('news_items');

                const title = document.createElement('h6');
                title.classList.add('mb-0');
                title.classList.add('news_items');
                const titleLink = document.createElement('a');
                titleLink.target = "_blank";
                titleLink.href = article.url;
                titleLink.textContent = article.title;
                title.appendChild(titleLink);

                const small = document.createElement('small');
                small.textContent = new Date(article.publishedAt).toLocaleTimeString();

                newsItem.appendChild(title);
                newsItem.appendChild(small);

                // Append the news item to the news_body container
                newsContainer.appendChild(newsItem);
            });
        })
        .catch(error => {
            console.error('Fetch error:', error);
        });
</script>