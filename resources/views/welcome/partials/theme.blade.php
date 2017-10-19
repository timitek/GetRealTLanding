<h1>Choose a theme:</h1>

<div v-for="theme in themes">
    <img :src="'https://bootswatch.com/' + theme + '/thumbnail.png'" 
         v-on:click="selectTheme(theme)"
         style="width:200px">
</div>