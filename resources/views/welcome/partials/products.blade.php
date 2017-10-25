<h1 class="title">
Let's get started with your website.
</h1>
<p class="subtitle">
Which of these do you require?
</p>

<p>
domain = @{{options.domain}}<br />
hosting = @{{options.hosting}}<br />
agent = @{{options.agent}}<br />
broker = @{{broker}}<br />
price = @{{price}}
</p>

<div class="field">
    <input id="domain" type="checkbox" name="switch" class="switch is-thin is-rounded is-outlined is-rtl" v-model="options.domain">
    <label for="domain">I require a domain for $14.95/annum</label>
</div>

<div class="field">
    <input id="hosting" type="checkbox" name="switch" class="switch is-thin is-rounded is-outlined is-rtl" v-model="options.hosting">
    <label for="hosting">I require hosting for $6.95/month</label>
</div>

<div class="field is-grouped">
    <ul>
      <li><div class="field">
        <input id="agent" type="checkbox" name="switch" class="switch is-thin is-rounded is-outlined is-rtl" v-model="options.agent">
        <label for="agent">GetRETS Agent Bundle (Individual) for $21.00/month </label>
      </div></li>

      <li><div class="field">
        <input id="broker" type="checkbox" name="switch" class="switch is-thin is-rounded is-outlined is-rtl" v-model="broker">
        <label for="broker">GetRETS Broker Bundle (Commercial) for $121.00/month</label>
      </div></li>
    </ul>
</div>

<div class="field is-grouped is-pulled-right">
  <div class="control">
      <a class="button is-warning is-outlined is-medium" v-on:click="showPage('contact')">Back</a>
      <a class="button is-primary is-outlined is-medium" v-on:click="showPage('theme')">Proceed</a>
  </div>
</div>