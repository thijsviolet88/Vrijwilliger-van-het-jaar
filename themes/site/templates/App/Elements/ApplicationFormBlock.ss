<section class="bg-primary py-20 px-6 lg:px-0">
    <div class="container divide-y-2 divide-white">
        <% if $ShowTitle %>
        <h2 class="text-center pb-6">{$Title}</h2>
        <% end_if %>
        <form class="pt-6 space-y-10" method="post" action="$Link('processApplicationForm')">
            <div class="space-y-6">
                <fieldset class="flex gap-x-6" required>
                <label class="lg:text-lg">
                    <input type="checkbox" name="gender" value="Man"> Man
                </label>
                <label class="lg:text-lg">
                    <input type="checkbox" name="gender" value="Vrouw"> Vrouw
                </label>
                <label class="lg:text-lg">
                    <input type="checkbox" name="gender" value="Anders"> Anders
                </label>
                </fieldset>

                <div class="space-y-4"> 
                    <div class="flex gap-y-2 gap-x-4">
                        <input class="w-full input" placeholder="Naam *" type="text" id="name" name="name" required>
                        <input class="w-full input" placeholder="Tussenvoegsel" type="text" id="insert" name="insert">
                        <input class="w-full input" placeholder="Achternaam *" type="text" id="lastname" name="lastname" required>
                    </div>

                    <input class="w-full input" type="email" id="email" name="email" placeholder="E-mail adres *" required>

                    <input class="w-full input" type="tel" id="phone" name="phone" placeholder="Telefoonnummer *" required>
                    
                    <input class="w-full input" type="text" id="work" name="work" placeholder="Wat voor vrijwilligerswerk doe je*" required>

                    <input class="w-full input" type="text" id="organization" name="organization" placeholder="Bij welke organisatie">
                </div>
            </div>
            <input class="btn" type="submit" value="Aanmelden">
        </form>
    </div>
</div>
