<section class="bg-primary px-6 lg:px-0">
    <div class="container py-14 space-y-4 divide-y-2 divide-white">
        <% if $Title %>
            <h3 class="text-black">{$Title}</h2>
        <% end_if %>
        <div id="app">
            <faq-list :questions="$QuestionList"></faq-list>
        </div>
    </div>
</section>