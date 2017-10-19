<h1>Choose a theme:</h1>

<div v-for="theme in themes">
    <img :src="'https://bootswatch.com/' + theme + '/thumbnail.png'" 
         v-on:click="selectTheme(theme)"
         style="width:200px"
         style="diaplay: inline">
</div>

<div class="field is-grouped is-pulled-right">
    <div class="control">
        <a class="button is-warning is-outlined is-medium" v-on:click="showPage('contact')">
        Back
        </a>
    </div>
    <div class="control">
        <a class="button is-primary is-outlined is-medium" v-on:click="showPage('confirm')">
        Save and Continue
        </a>
    </div>
</div>