<html><head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="apple-touch-icon" sizes="57x57" href="/images/apple-touch-icon-57x57.png?v=699Nxpjr2A">
<link rel="apple-touch-icon" sizes="60x60" href="/images/apple-touch-icon-60x60.png?v=699Nxpjr2A">
<link rel="apple-touch-icon" sizes="72x72" href="/images/apple-touch-icon-72x72.png?v=699Nxpjr2A">
<link rel="icon" type="image/png" href="/images/favicon-32x32.png?v=699Nxpjr2A" sizes="32x32">
<link rel="icon" type="image/png" href="/images/favicon-16x16.png?v=699Nxpjr2A" sizes="16x16">
<link rel="manifest" href="/images/manifest.json?v=699Nxpjr2A">
<link rel="mask-icon" href="/images/safari-pinned-tab.svg?v=699Nxpjr2A" color="#F6F6F6">
<link rel="shortcut icon" href="/images/favicon.ico?v=699Nxpjr2A">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="/browserconfig.xml?v=699Nxpjr2A">
<meta name="theme-color" content="#f6f6f6">

<title>
  Examples - Select2
</title>

<script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="vendor/js/jquery.min.js"></script>
<script type="text/javascript" src="dist/js/select2.full.js"></script>
<script type="text/javascript" src="vendor/js/bootstrap.min.js"></script>
<script type="text/javascript" src="vendor/js/prettify.min.js"></script>
<script type="text/javascript" src="vendor/js/anchor.min.js"></script>

<style class="anchorjs"></style><link href="css/bootstrap.css" type="text/css" rel="stylesheet">
<link href="dist/css/select2.min.css" type="text/css" rel="stylesheet">

<link href="css/font-awesome.css" type="text/css" rel="stylesheet">
<link href="css/s2-docs.css" type="text/css" rel="stylesheet">

  </head>
  <body>
    <header class="s2-docs-nav navbar navbar-default navbar-static-top" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".select2-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
      </button>
      <a href="./" class="navbar-brand"><img src="/images/logo.png" height="20px"> Select2</a>
    </div>

    <nav class="collapse navbar-collapse select2-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li class="active">
          <a href="./examples.html">Examples</a>
        </li>
        <li>
          <a href="./options.html">Options</a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            Topics
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="./announcements-4.0.html">4.0 Announcement</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="https://github.com/select2/select2/releases">
                Release notes
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="./community.html">Community</a>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="https://github.com/select2/select2">
            <i class="fa fa-github"></i>
            GitHub
          </a>
        </li>
      </ul>
    </nav>
  </div>
</header>


    <script type="text/javascript" src="vendor/js/placeholders.jquery.min.js"></script>
<script type="text/javascript" src="dist/js/i18n/es.js"></script>

<style type="text/css">
  .img-flag {
    height: 15px;
    width: 18px;
  }
</style>

<section class="jumbotron">
  <div class="container">
    <h1>
      Examples
    </h1>
  </div>
</section>

<div class="container s2-docs-container">
  <div class="row">
    <div class="col-md-9" role="main">

      <section>

  <h1 id="basics" class="page-header"><a class="anchorjs-link " href="#basics" aria-label="Anchor link for: basics" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>The basics</h1>

  <h2 id="single"><a class="anchorjs-link " href="#single" aria-label="Anchor link for: single" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Single select boxes</h2>

  <p>
    Select2 can take a regular select box like this...
  </p>

  <p>
    <select class="js-states form-control">
  <optgroup label="Alaskan/Hawaiian Time Zone">
    <option value="AK">Alaska</option>
    <option value="HI">Hawaii</option>
  </optgroup>
  <optgroup label="Pacific Time Zone">
    <option value="CA">California</option>
    <option value="NV">Nevada</option>
    <option value="OR">Oregon</option>
    <option value="WA">Washington</option>
  </optgroup>
  <optgroup label="Mountain Time Zone">
    <option value="AZ">Arizona</option>
    <option value="CO">Colorado</option>
    <option value="ID">Idaho</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NM">New Mexico</option>
    <option value="ND">North Dakota</option>
    <option value="UT">Utah</option>
    <option value="WY">Wyoming</option>
  </optgroup>
  <optgroup label="Central Time Zone">
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="IL">Illinois</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="OK">Oklahoma</option>
    <option value="SD">South Dakota</option>
    <option value="TX">Texas</option>
    <option value="TN">Tennessee</option>
    <option value="WI">Wisconsin</option>
  </optgroup>
  <optgroup label="Eastern Time Zone">
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="OH">Ohio</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WV">West Virginia</option>
  </optgroup>
</select>
  </p>

  <p>
    and turn it into this...
  </p>

  <div class="s2-example">
    <p>
      <select class="js-example-basic-single js-states form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
  <optgroup label="Alaskan/Hawaiian Time Zone">
    <option value="AK">Alaska</option>
    <option value="HI">Hawaii</option>
  </optgroup>
  <optgroup label="Pacific Time Zone">
    <option value="CA">California</option>
    <option value="NV">Nevada</option>
    <option value="OR">Oregon</option>
    <option value="WA">Washington</option>
  </optgroup>
  <optgroup label="Mountain Time Zone">
    <option value="AZ">Arizona</option>
    <option value="CO">Colorado</option>
    <option value="ID">Idaho</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NM">New Mexico</option>
    <option value="ND">North Dakota</option>
    <option value="UT">Utah</option>
    <option value="WY">Wyoming</option>
  </optgroup>
  <optgroup label="Central Time Zone">
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="IL">Illinois</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="OK">Oklahoma</option>
    <option value="SD">South Dakota</option>
    <option value="TX">Texas</option>
    <option value="TN">Tennessee</option>
    <option value="WI">Wisconsin</option>
  </optgroup>
  <optgroup label="Eastern Time Zone">
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="OH">Ohio</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WV">West Virginia</option>
  </optgroup>
</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-dnsg-container"><span class="select2-selection__rendered" id="select2-dnsg-container" title="Alaska">Alaska</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </p>
  </div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><table style="border-spacing: 0"><tbody><tr><td class="gutter gl" style="text-align: right"><pre class="lineno">1
2
3
4
5
6
7
8
9
10
11</pre></td><td class="code"><pre><span class="nt">&lt;script </span><span class="na">type=</span><span class="s">"text/javascript"</span><span class="nt">&gt;</span>
<span class="nx">$</span><span class="p">(</span><span class="nb">document</span><span class="p">).</span><span class="nx">ready</span><span class="p">(</span><span class="kd">function</span><span class="p">()</span> <span class="p">{</span>
  <span class="nx">$</span><span class="p">(</span><span class="s2">".js-example-basic-single"</span><span class="p">).</span><span class="nx">select2</span><span class="p">();</span>
<span class="p">});</span>
<span class="nt">&lt;/script&gt;</span>

<span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"js-example-basic-single"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"AL"</span><span class="nt">&gt;</span>Alabama<span class="nt">&lt;/option&gt;</span>
    ...
  <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"WY"</span><span class="nt">&gt;</span>Wyoming<span class="nt">&lt;/option&gt;</span>
<span class="nt">&lt;/select&gt;</span><span class="w">
</span></pre></td></tr></tbody></table></code></pre></figure>

  <h2 id="multiple"><a class="anchorjs-link " href="#multiple" aria-label="Anchor link for: multiple" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Multiple select boxes</h2>

  <p>
    Select2 also supports multi-value select boxes. The select below is declared with the <code>multiple</code> attribute.
  </p>

  <div class="s2-example">
    <p>
      <select class="js-example-basic-multiple js-states form-control select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true">
  <optgroup label="Alaskan/Hawaiian Time Zone">
    <option value="AK">Alaska</option>
    <option value="HI">Hawaii</option>
  </optgroup>
  <optgroup label="Pacific Time Zone">
    <option value="CA">California</option>
    <option value="NV">Nevada</option>
    <option value="OR">Oregon</option>
    <option value="WA">Washington</option>
  </optgroup>
  <optgroup label="Mountain Time Zone">
    <option value="AZ">Arizona</option>
    <option value="CO">Colorado</option>
    <option value="ID">Idaho</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NM">New Mexico</option>
    <option value="ND">North Dakota</option>
    <option value="UT">Utah</option>
    <option value="WY">Wyoming</option>
  </optgroup>
  <optgroup label="Central Time Zone">
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="IL">Illinois</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="OK">Oklahoma</option>
    <option value="SD">South Dakota</option>
    <option value="TX">Texas</option>
    <option value="TN">Tennessee</option>
    <option value="WI">Wisconsin</option>
  </optgroup>
  <optgroup label="Eastern Time Zone">
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="OH">Ohio</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WV">West Virginia</option>
  </optgroup>
</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </p>
  </div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><table style="border-spacing: 0"><tbody><tr><td class="gutter gl" style="text-align: right"><pre class="lineno">1
2
3
4
5
6
7
8
9</pre></td><td class="code"><pre><span class="nt">&lt;script </span><span class="na">type=</span><span class="s">"text/javascript"</span><span class="nt">&gt;</span>
<span class="nx">$</span><span class="p">(</span><span class="s2">".js-example-basic-multiple"</span><span class="p">).</span><span class="nx">select2</span><span class="p">();</span>
<span class="nt">&lt;/script&gt;</span>

<span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"js-example-basic-multiple"</span> <span class="na">multiple=</span><span class="s">"multiple"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"AL"</span><span class="nt">&gt;</span>Alabama<span class="nt">&lt;/option&gt;</span>
    ...
  <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"WY"</span><span class="nt">&gt;</span>Wyoming<span class="nt">&lt;/option&gt;</span>
<span class="nt">&lt;/select&gt;</span><span class="w">
</span></pre></td></tr></tbody></table></code></pre></figure>

  <h2 id="select-boxes-with-labels"><a class="anchorjs-link " href="#select-boxes-with-labels" aria-label="Anchor link for: select boxes with labels" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Select boxes with labels</h2>

  <p>
    You can, and should, use a <code>&lt;label&gt;</code> with Select2, just like any other <code>&lt;select&gt;</code> element.
  </p>

  <div class="s2-example">
    <p>
      <label for="id_label_single">
        Click this to highlight the single select element
        <select class="js-example-basic-single js-states form-control select2-hidden-accessible" id="id_label_single" tabindex="-1" aria-hidden="true">
  <optgroup label="Alaskan/Hawaiian Time Zone">
    <option value="AK">Alaska</option>
    <option value="HI">Hawaii</option>
  </optgroup>
  <optgroup label="Pacific Time Zone">
    <option value="CA">California</option>
    <option value="NV">Nevada</option>
    <option value="OR">Oregon</option>
    <option value="WA">Washington</option>
  </optgroup>
  <optgroup label="Mountain Time Zone">
    <option value="AZ">Arizona</option>
    <option value="CO">Colorado</option>
    <option value="ID">Idaho</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NM">New Mexico</option>
    <option value="ND">North Dakota</option>
    <option value="UT">Utah</option>
    <option value="WY">Wyoming</option>
  </optgroup>
  <optgroup label="Central Time Zone">
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="IL">Illinois</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="OK">Oklahoma</option>
    <option value="SD">South Dakota</option>
    <option value="TX">Texas</option>
    <option value="TN">Tennessee</option>
    <option value="WI">Wisconsin</option>
  </optgroup>
  <optgroup label="Eastern Time Zone">
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="OH">Ohio</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WV">West Virginia</option>
  </optgroup>
</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-id_label_single-container"><span class="select2-selection__rendered" id="select2-id_label_single-container" title="Alaska">Alaska</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
      </label>
    </p>
    <p>
      <label for="id_label_multiple">
        Click this to highlight the multiple select element
        <select class="js-example-basic-multiple js-states form-control select2-hidden-accessible" id="id_label_multiple" multiple="" tabindex="-1" aria-hidden="true">
  <optgroup label="Alaskan/Hawaiian Time Zone">
    <option value="AK">Alaska</option>
    <option value="HI">Hawaii</option>
  </optgroup>
  <optgroup label="Pacific Time Zone">
    <option value="CA">California</option>
    <option value="NV">Nevada</option>
    <option value="OR">Oregon</option>
    <option value="WA">Washington</option>
  </optgroup>
  <optgroup label="Mountain Time Zone">
    <option value="AZ">Arizona</option>
    <option value="CO">Colorado</option>
    <option value="ID">Idaho</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NM">New Mexico</option>
    <option value="ND">North Dakota</option>
    <option value="UT">Utah</option>
    <option value="WY">Wyoming</option>
  </optgroup>
  <optgroup label="Central Time Zone">
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="IL">Illinois</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="OK">Oklahoma</option>
    <option value="SD">South Dakota</option>
    <option value="TX">Texas</option>
    <option value="TN">Tennessee</option>
    <option value="WI">Wisconsin</option>
  </optgroup>
  <optgroup label="Eastern Time Zone">
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="OH">Ohio</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WV">West Virginia</option>
  </optgroup>
</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
      </label>
    </p>
  </div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><table style="border-spacing: 0"><tbody><tr><td class="gutter gl" style="text-align: right"><pre class="lineno">1
2
3
4
5
6
7
8
9
10
11</pre></td><td class="code"><pre><span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"id_label_single"</span><span class="nt">&gt;</span>
  Click this to highlight the single select element

  <span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"js-example-basic-single js-states form-control"</span> <span class="na">id=</span><span class="s">"id_label_single"</span><span class="nt">&gt;&lt;/select&gt;</span>
<span class="nt">&lt;/label&gt;</span>

<span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">"id_label_multiple"</span><span class="nt">&gt;</span>
  Click this to highlight the multiple select element

  <span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"js-example-basic-multiple js-states form-control"</span> <span class="na">id=</span><span class="s">"id_label_multiple"</span> <span class="na">multiple=</span><span class="s">"multiple"</span><span class="nt">&gt;&lt;/select&gt;</span>
<span class="nt">&lt;/label&gt;</span><span class="w">
</span></pre></td></tr></tbody></table></code></pre></figure>
</section>
      <section>
  <h1 id="placeholders"><a class="anchorjs-link " href="#placeholders" aria-label="Anchor link for: placeholders" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Placeholders</h1>

  <p>
    A placeholder value can be defined and will be displayed until a
    selection is made. Select2 uses the <code>placeholder</code> attribute
    on multiple select boxes, which requires IE 10+. You can support it in
    older versions with
    <a href="https://github.com/jamesallardice/Placeholders.js">the Placeholders.js polyfill</a>.
  </p>

  <div class="s2-example">
    <p>
      <select class="js-example-placeholder-single js-states form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
        <option></option>
      
  <optgroup label="Alaskan/Hawaiian Time Zone">
    <option value="AK">Alaska</option>
    <option value="HI">Hawaii</option>
  </optgroup>
  <optgroup label="Pacific Time Zone">
    <option value="CA">California</option>
    <option value="NV">Nevada</option>
    <option value="OR">Oregon</option>
    <option value="WA">Washington</option>
  </optgroup>
  <optgroup label="Mountain Time Zone">
    <option value="AZ">Arizona</option>
    <option value="CO">Colorado</option>
    <option value="ID">Idaho</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NM">New Mexico</option>
    <option value="ND">North Dakota</option>
    <option value="UT">Utah</option>
    <option value="WY">Wyoming</option>
  </optgroup>
  <optgroup label="Central Time Zone">
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="IL">Illinois</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="OK">Oklahoma</option>
    <option value="SD">South Dakota</option>
    <option value="TX">Texas</option>
    <option value="TN">Tennessee</option>
    <option value="WI">Wisconsin</option>
  </optgroup>
  <optgroup label="Eastern Time Zone">
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="OH">Ohio</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WV">West Virginia</option>
  </optgroup>
</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 816px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-056r-container"><span class="select2-selection__rendered" id="select2-056r-container"><span class="select2-selection__placeholder">Select a state</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </p>
    <p>
      <select class="js-example-placeholder-multiple js-states form-control select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true">
  <optgroup label="Alaskan/Hawaiian Time Zone">
    <option value="AK">Alaska</option>
    <option value="HI">Hawaii</option>
  </optgroup>
  <optgroup label="Pacific Time Zone">
    <option value="CA">California</option>
    <option value="NV">Nevada</option>
    <option value="OR">Oregon</option>
    <option value="WA">Washington</option>
  </optgroup>
  <optgroup label="Mountain Time Zone">
    <option value="AZ">Arizona</option>
    <option value="CO">Colorado</option>
    <option value="ID">Idaho</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NM">New Mexico</option>
    <option value="ND">North Dakota</option>
    <option value="UT">Utah</option>
    <option value="WY">Wyoming</option>
  </optgroup>
  <optgroup label="Central Time Zone">
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="IL">Illinois</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="OK">Oklahoma</option>
    <option value="SD">South Dakota</option>
    <option value="TX">Texas</option>
    <option value="TN">Tennessee</option>
    <option value="WI">Wisconsin</option>
  </optgroup>
  <optgroup label="Eastern Time Zone">
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="OH">Ohio</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WV">West Virginia</option>
  </optgroup>
</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 816px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Select a state" style="width: 814px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </p>
  </div>

  <pre data-fill-from=".js-code-placeholder" class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pln">$</span><span class="pun">(</span><span class="str">".js-example-placeholder-single"</span><span class="pun">).</span><span class="pln">select2</span><span class="pun">({</span></li><li class="L1"><span class="pln">  placeholder</span><span class="pun">:</span><span class="pln"> </span><span class="str">"Select a state"</span><span class="pun">,</span></li><li class="L2"><span class="pln">  allowClear</span><span class="pun">:</span><span class="pln"> </span><span class="kwd">true</span></li><li class="L3"><span class="pun">});</span></li><li class="L4"><span class="pln">&nbsp;</span></li><li class="L5"><span class="pln">$</span><span class="pun">(</span><span class="str">".js-example-placeholder-multiple"</span><span class="pun">).</span><span class="pln">select2</span><span class="pun">({</span></li><li class="L6"><span class="pln">  placeholder</span><span class="pun">:</span><span class="pln"> </span><span class="str">"Select a state"</span></li><li class="L7"><span class="pun">});</span></li></ol></pre>

<script type="text/javascript" class="js-code-placeholder">
$(".js-example-placeholder-single").select2({
  placeholder: "Select a state",
  allowClear: true
});

$(".js-example-placeholder-multiple").select2({
  placeholder: "Select a state"
});
</script>

</section>

      <section>

  <h1 id="data" class="page-header"><a class="anchorjs-link " href="#data" aria-label="Anchor link for: data" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>
    Data sources
  </h1>

  <p>In addition to handling options from a standard <code>&lt;select&gt;</code>, Select2 can also retrieve the results from other data sources.</p>

  <h2 id="data-array"><a class="anchorjs-link " href="#data-array" aria-label="Anchor link for: data array" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Loading array data</h2>

  <p>
    Select2 provides a way to load the data from a local array.
    You can provide initial selections with array data by providing the
    option tag for the selected values, similar to how it would be done for
    a standard select.
  </p>

  <div class="s2-example">
    <p>
      <select class="js-example-data-array form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="0">enhancement</option><option value="1">bug</option><option value="2">duplicate</option><option value="3">invalid</option><option value="4">wontfix</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-q3lv-container"><span class="select2-selection__rendered" id="select2-q3lv-container" title="enhancement">enhancement</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </p>
    <p>
      <select class="js-example-data-array-selected form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
        <option value="2">duplicate</option>
      <option value="0">enhancement</option><option value="1">bug</option><option value="3">invalid</option><option value="4">wontfix</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-kprn-container"><span class="select2-selection__rendered" id="select2-kprn-container" title="duplicate">duplicate</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </p>
  </div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><table style="border-spacing: 0"><tbody><tr><td class="gutter gl" style="text-align: right"><pre class="lineno">1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17</pre></td><td class="code"><pre><span class="nt">&lt;script </span><span class="na">type=</span><span class="s">"text/javascript"</span><span class="nt">&gt;</span>
<span class="kd">var</span> <span class="nx">data</span> <span class="o">=</span> <span class="p">[{</span> <span class="na">id</span><span class="p">:</span> <span class="mi">0</span><span class="p">,</span> <span class="na">text</span><span class="p">:</span> <span class="s1">'enhancement'</span> <span class="p">},</span> <span class="p">{</span> <span class="na">id</span><span class="p">:</span> <span class="mi">1</span><span class="p">,</span> <span class="na">text</span><span class="p">:</span> <span class="s1">'bug'</span> <span class="p">},</span> <span class="p">{</span> <span class="na">id</span><span class="p">:</span> <span class="mi">2</span><span class="p">,</span> <span class="na">text</span><span class="p">:</span> <span class="s1">'duplicate'</span> <span class="p">},</span> <span class="p">{</span> <span class="na">id</span><span class="p">:</span> <span class="mi">3</span><span class="p">,</span> <span class="na">text</span><span class="p">:</span> <span class="s1">'invalid'</span> <span class="p">},</span> <span class="p">{</span> <span class="na">id</span><span class="p">:</span> <span class="mi">4</span><span class="p">,</span> <span class="na">text</span><span class="p">:</span> <span class="s1">'wontfix'</span> <span class="p">}];</span>

<span class="nx">$</span><span class="p">(</span><span class="s2">".js-example-data-array"</span><span class="p">).</span><span class="nx">select2</span><span class="p">({</span>
  <span class="na">data</span><span class="p">:</span> <span class="nx">data</span>
<span class="p">})</span>

<span class="nx">$</span><span class="p">(</span><span class="s2">".js-example-data-array-selected"</span><span class="p">).</span><span class="nx">select2</span><span class="p">({</span>
  <span class="na">data</span><span class="p">:</span> <span class="nx">data</span>
<span class="p">})</span>
<span class="nt">&lt;/script&gt;</span>

<span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"js-example-data-array"</span><span class="nt">&gt;&lt;/select&gt;</span>

<span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"js-example-data-array-selected"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"2"</span> <span class="na">selected=</span><span class="s">"selected"</span><span class="nt">&gt;</span>duplicate<span class="nt">&lt;/option&gt;</span>
<span class="nt">&lt;/select&gt;</span><span class="w">
</span></pre></td></tr></tbody></table></code></pre></figure>

  <h2 id="data-ajax"><a class="anchorjs-link " href="#data-ajax" aria-label="Anchor link for: data ajax" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Loading remote data</h2>

  <p>
    Select2 comes with AJAX support built in, using jQuery's AJAX methods.
    In this example, we can search for repositories using GitHub's API.
  </p>

  <p>
    <select class="js-example-data-ajax form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
      <option value="3620194" selected="selected">select2/select2</option>
    </select><span class="select2 select2-container select2-container--default select2-container--below select2-container--open" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="true" tabindex="0" aria-labelledby="select2-w1l6-container" aria-owns="select2-w1l6-results"><span class="select2-selection__rendered" id="select2-w1l6-container" title="select2/select2">select2/select2</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
  </p>

  <p>
    When using Select2 with remote data, the HTML required for the
    <code>select</code> is the same as any other Select2. If you need to
    provide default selections, you just need to include an
    <code>option</code> for each selection that contains the value and text
    that should be displayed.
  </p>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><table style="border-spacing: 0"><tbody><tr><td class="gutter gl" style="text-align: right"><pre class="lineno">1
2
3</pre></td><td class="code"><pre><span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"js-data-example-ajax"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"3620194"</span> <span class="na">selected=</span><span class="s">"selected"</span><span class="nt">&gt;</span>select2/select2<span class="nt">&lt;/option&gt;</span>
<span class="nt">&lt;/select&gt;</span><span class="w">
</span></pre></td></tr></tbody></table></code></pre></figure>

  <p>
    You can configure how Select2 searches for remote data using the
    <code>ajax</code> option. More information on the individual options
    that Select2 handles can be found in the
    <a href="options.html#ajax">options documentation for <code>ajax</code></a>.
  </p>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><table style="border-spacing: 0"><tbody><tr><td class="gutter gl" style="text-align: right"><pre class="lineno">1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32</pre></td><td class="code"><pre><span class="nx">$</span><span class="p">(</span><span class="s2">".js-data-example-ajax"</span><span class="p">).</span><span class="nx">select2</span><span class="p">({</span>
  <span class="na">ajax</span><span class="p">:</span> <span class="p">{</span>
    <span class="na">url</span><span class="p">:</span> <span class="s2">"https://api.github.com/search/repositories"</span><span class="p">,</span>
    <span class="na">dataType</span><span class="p">:</span> <span class="s1">'json'</span><span class="p">,</span>
    <span class="na">delay</span><span class="p">:</span> <span class="mi">250</span><span class="p">,</span>
    <span class="na">data</span><span class="p">:</span> <span class="kd">function</span> <span class="p">(</span><span class="nx">params</span><span class="p">)</span> <span class="p">{</span>
      <span class="k">return</span> <span class="p">{</span>
        <span class="na">q</span><span class="p">:</span> <span class="nx">params</span><span class="p">.</span><span class="nx">term</span><span class="p">,</span> <span class="c1">// search term</span>
        <span class="na">page</span><span class="p">:</span> <span class="nx">params</span><span class="p">.</span><span class="nx">page</span>
      <span class="p">};</span>
    <span class="p">},</span>
    <span class="na">processResults</span><span class="p">:</span> <span class="kd">function</span> <span class="p">(</span><span class="nx">data</span><span class="p">,</span> <span class="nx">params</span><span class="p">)</span> <span class="p">{</span>
      <span class="c1">// parse the results into the format expected by Select2</span>
      <span class="c1">// since we are using custom formatting functions we do not need to</span>
      <span class="c1">// alter the remote JSON data, except to indicate that infinite</span>
      <span class="c1">// scrolling can be used</span>
      <span class="nx">params</span><span class="p">.</span><span class="nx">page</span> <span class="o">=</span> <span class="nx">params</span><span class="p">.</span><span class="nx">page</span> <span class="o">||</span> <span class="mi">1</span><span class="p">;</span>

      <span class="k">return</span> <span class="p">{</span>
        <span class="na">results</span><span class="p">:</span> <span class="nx">data</span><span class="p">.</span><span class="nx">items</span><span class="p">,</span>
        <span class="na">pagination</span><span class="p">:</span> <span class="p">{</span>
          <span class="na">more</span><span class="p">:</span> <span class="p">(</span><span class="nx">params</span><span class="p">.</span><span class="nx">page</span> <span class="o">*</span> <span class="mi">30</span><span class="p">)</span> <span class="o">&lt;</span> <span class="nx">data</span><span class="p">.</span><span class="nx">total_count</span>
        <span class="p">}</span>
      <span class="p">};</span>
    <span class="p">},</span>
    <span class="na">cache</span><span class="p">:</span> <span class="kc">true</span>
  <span class="p">},</span>
  <span class="na">escapeMarkup</span><span class="p">:</span> <span class="kd">function</span> <span class="p">(</span><span class="nx">markup</span><span class="p">)</span> <span class="p">{</span> <span class="k">return</span> <span class="nx">markup</span><span class="p">;</span> <span class="p">},</span> <span class="c1">// let our custom formatter work</span>
  <span class="na">minimumInputLength</span><span class="p">:</span> <span class="mi">1</span><span class="p">,</span>
  <span class="na">templateResult</span><span class="p">:</span> <span class="nx">formatRepo</span><span class="p">,</span> <span class="c1">// omitted for brevity, see the source of this page</span>
  <span class="na">templateSelection</span><span class="p">:</span> <span class="nx">formatRepoSelection</span> <span class="c1">// omitted for brevity, see the source of this page</span>
<span class="p">});</span><span class="w">
</span></pre></td></tr></tbody></table></code></pre></figure>

  <p>
    Select2 will pass any options in the <code>ajax</code> object to
    jQuery's <code>$.ajax</code> function, or the <code>transport</code>
    function you specify.
  </p>
</section>

      <section>

  <h1 id="disabled"><a class="anchorjs-link " href="#disabled" aria-label="Anchor link for: disabled" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Disabled mode</h1>

  <p>
    Select2 will respond to the <code>disabled</code> attribute on
    <code>&lt;select&gt;</code> elements. You can also initialize Select2
    with <code>disabled: true</code> to get the same effect.
  </p>

  <div class="s2-example">
    <p>
      <select class="js-example-disabled js-states form-control select2-hidden-accessible" disabled="" tabindex="-1" aria-hidden="true">
  <optgroup label="Alaskan/Hawaiian Time Zone">
    <option value="AK">Alaska</option>
    <option value="HI">Hawaii</option>
  </optgroup>
  <optgroup label="Pacific Time Zone">
    <option value="CA">California</option>
    <option value="NV">Nevada</option>
    <option value="OR">Oregon</option>
    <option value="WA">Washington</option>
  </optgroup>
  <optgroup label="Mountain Time Zone">
    <option value="AZ">Arizona</option>
    <option value="CO">Colorado</option>
    <option value="ID">Idaho</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NM">New Mexico</option>
    <option value="ND">North Dakota</option>
    <option value="UT">Utah</option>
    <option value="WY">Wyoming</option>
  </optgroup>
  <optgroup label="Central Time Zone">
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="IL">Illinois</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="OK">Oklahoma</option>
    <option value="SD">South Dakota</option>
    <option value="TX">Texas</option>
    <option value="TN">Tennessee</option>
    <option value="WI">Wisconsin</option>
  </optgroup>
  <optgroup label="Eastern Time Zone">
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="OH">Ohio</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WV">West Virginia</option>
  </optgroup>
</select><span class="select2 select2-container select2-container--default select2-container--disabled" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-labelledby="select2-3ox2-container"><span class="select2-selection__rendered" id="select2-3ox2-container" title="Alaska">Alaska</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </p>

    <p>
      <select class="js-example-disabled-multi js-states form-control select2-hidden-accessible" multiple="" disabled="" tabindex="-1" aria-hidden="true">
  <optgroup label="Alaskan/Hawaiian Time Zone">
    <option value="AK">Alaska</option>
    <option value="HI">Hawaii</option>
  </optgroup>
  <optgroup label="Pacific Time Zone">
    <option value="CA">California</option>
    <option value="NV">Nevada</option>
    <option value="OR">Oregon</option>
    <option value="WA">Washington</option>
  </optgroup>
  <optgroup label="Mountain Time Zone">
    <option value="AZ">Arizona</option>
    <option value="CO">Colorado</option>
    <option value="ID">Idaho</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NM">New Mexico</option>
    <option value="ND">North Dakota</option>
    <option value="UT">Utah</option>
    <option value="WY">Wyoming</option>
  </optgroup>
  <optgroup label="Central Time Zone">
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="IL">Illinois</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="OK">Oklahoma</option>
    <option value="SD">South Dakota</option>
    <option value="TX">Texas</option>
    <option value="TN">Tennessee</option>
    <option value="WI">Wisconsin</option>
  </optgroup>
  <optgroup label="Eastern Time Zone">
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="OH">Ohio</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WV">West Virginia</option>
  </optgroup>
</select><span class="select2 select2-container select2-container--default select2-container--disabled" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" disabled="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </p>
    <div class="btn-group btn-group-sm" role="group" aria-label="Programmatic enabling and disabling">
      <button type="button" class="js-programmatic-enable btn btn-default">
        Enable
      </button>
      <button type="button" class="js-programmatic-disable btn btn-default">
        Disable
      </button>
    </div>
  </div>

  <pre data-fill-from=".js-code-disabled" class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="pln">$</span><span class="pun">(</span><span class="str">".js-programmatic-enable"</span><span class="pun">).</span><span class="pln">on</span><span class="pun">(</span><span class="str">"click"</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span></li><li class="L1"><span class="pln">  $</span><span class="pun">(</span><span class="str">".js-example-disabled"</span><span class="pun">).</span><span class="pln">prop</span><span class="pun">(</span><span class="str">"disabled"</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">false</span><span class="pun">);</span></li><li class="L2"><span class="pln">  $</span><span class="pun">(</span><span class="str">".js-example-disabled-multi"</span><span class="pun">).</span><span class="pln">prop</span><span class="pun">(</span><span class="str">"disabled"</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">false</span><span class="pun">);</span></li><li class="L3"><span class="pun">});</span></li><li class="L4"><span class="pln">&nbsp;</span></li><li class="L5"><span class="pln">$</span><span class="pun">(</span><span class="str">".js-programmatic-disable"</span><span class="pun">).</span><span class="pln">on</span><span class="pun">(</span><span class="str">"click"</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span></li><li class="L6"><span class="pln">  $</span><span class="pun">(</span><span class="str">".js-example-disabled"</span><span class="pun">).</span><span class="pln">prop</span><span class="pun">(</span><span class="str">"disabled"</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">true</span><span class="pun">);</span></li><li class="L7"><span class="pln">  $</span><span class="pun">(</span><span class="str">".js-example-disabled-multi"</span><span class="pun">).</span><span class="pln">prop</span><span class="pun">(</span><span class="str">"disabled"</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">true</span><span class="pun">);</span></li><li class="L8"><span class="pun">});</span></li></ol></pre>

<script type="text/javascript" class="js-code-disabled">
$(".js-programmatic-enable").on("click", function () {
  $(".js-example-disabled").prop("disabled", false);
  $(".js-example-disabled-multi").prop("disabled", false);
});

$(".js-programmatic-disable").on("click", function () {
  $(".js-example-disabled").prop("disabled", true);
  $(".js-example-disabled-multi").prop("disabled", true);
});
</script>

</section>

      <section>

  <h1 id="disabled-results"><a class="anchorjs-link " href="#disabled-results" aria-label="Anchor link for: disabled results" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Disabled results</h1>

  <p>
    Select2 will correctly handle disabled results, both with data coming
    from a standard select (when the <code>disabled</code> attribute is set)
    and from remote sources, where the object has
    <code>disabled: true</code> set.
  </p>

  <div class="s2-example">
    <p>
      <select class="js-example-disabled-results form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
        <option value="one">First</option>
        <option value="two" disabled="disabled">Second (disabled)</option>
        <option value="three">Third</option>
      </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-p9pf-container"><span class="select2-selection__rendered" id="select2-p9pf-container" title="First">First</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </p>
  </div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><table style="border-spacing: 0"><tbody><tr><td class="gutter gl" style="text-align: right"><pre class="lineno">1
2
3
4
5</pre></td><td class="code"><pre><span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"js-example-disabled-results"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"one"</span><span class="nt">&gt;</span>First<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"two"</span> <span class="na">disabled=</span><span class="s">"disabled"</span><span class="nt">&gt;</span>Second (disabled)<span class="nt">&lt;/option&gt;</span>
  <span class="nt">&lt;option</span> <span class="na">value=</span><span class="s">"three"</span><span class="nt">&gt;</span>Third<span class="nt">&lt;/option&gt;</span>
<span class="nt">&lt;/select&gt;</span><span class="w">
</span></pre></td></tr></tbody></table></code></pre></figure>
</section>

      <section>
  <h1 id="multiple-max"><a class="anchorjs-link " href="#multiple-max" aria-label="Anchor link for: multiple max" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>
    Limiting the number of selections
  </h1>

  <p>
    Select2 multi-value select boxes can set restrictions regarding the
    maximum number of options selected. The select below is declared with
    the <code>multiple</code> attribute with <code>maximumSelectionLength</code>
    in the select2 options.
  </p>

  <div class="s2-example">
    <p>
      <select class="js-example-basic-multiple-limit js-states form-control select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true">
  <optgroup label="Alaskan/Hawaiian Time Zone">
    <option value="AK">Alaska</option>
    <option value="HI">Hawaii</option>
  </optgroup>
  <optgroup label="Pacific Time Zone">
    <option value="CA">California</option>
    <option value="NV">Nevada</option>
    <option value="OR">Oregon</option>
    <option value="WA">Washington</option>
  </optgroup>
  <optgroup label="Mountain Time Zone">
    <option value="AZ">Arizona</option>
    <option value="CO">Colorado</option>
    <option value="ID">Idaho</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NM">New Mexico</option>
    <option value="ND">North Dakota</option>
    <option value="UT">Utah</option>
    <option value="WY">Wyoming</option>
  </optgroup>
  <optgroup label="Central Time Zone">
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="IL">Illinois</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="OK">Oklahoma</option>
    <option value="SD">South Dakota</option>
    <option value="TX">Texas</option>
    <option value="TN">Tennessee</option>
    <option value="WI">Wisconsin</option>
  </optgroup>
  <optgroup label="Eastern Time Zone">
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="OH">Ohio</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WV">West Virginia</option>
  </optgroup>
</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </p>
  </div>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><table style="border-spacing: 0"><tbody><tr><td class="gutter gl" style="text-align: right"><pre class="lineno">1
2
3</pre></td><td class="code"><pre><span class="nx">$</span><span class="p">(</span><span class="s2">".js-example-basic-multiple-limit"</span><span class="p">).</span><span class="nx">select2</span><span class="p">({</span>
  <span class="na">maximumSelectionLength</span><span class="p">:</span> <span class="mi">2</span>
<span class="p">});</span><span class="w">
</span></pre></td></tr></tbody></table></code></pre></figure>
</section>

      <section>

  <h1 id="hide-search"><a class="anchorjs-link " href="#hide-search" aria-label="Anchor link for: hide search" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Hiding the search box</h1>

  <p>
    Select2 allows you to hide the search box depending on the number of
    options which are displayed. In this example, we use the value
    <code>Infinity</code> to tell Select2 to never display the search box.
  </p>

  <div class="s2-example">
    <p>
      <select class="js-example-basic-hide-search js-states form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
  <optgroup label="Alaskan/Hawaiian Time Zone">
    <option value="AK">Alaska</option>
    <option value="HI">Hawaii</option>
  </optgroup>
  <optgroup label="Pacific Time Zone">
    <option value="CA">California</option>
    <option value="NV">Nevada</option>
    <option value="OR">Oregon</option>
    <option value="WA">Washington</option>
  </optgroup>
  <optgroup label="Mountain Time Zone">
    <option value="AZ">Arizona</option>
    <option value="CO">Colorado</option>
    <option value="ID">Idaho</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NM">New Mexico</option>
    <option value="ND">North Dakota</option>
    <option value="UT">Utah</option>
    <option value="WY">Wyoming</option>
  </optgroup>
  <optgroup label="Central Time Zone">
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="IL">Illinois</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="OK">Oklahoma</option>
    <option value="SD">South Dakota</option>
    <option value="TX">Texas</option>
    <option value="TN">Tennessee</option>
    <option value="WI">Wisconsin</option>
  </optgroup>
  <optgroup label="Eastern Time Zone">
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="OH">Ohio</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WV">West Virginia</option>
  </optgroup>
</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-jr2p-container"><span class="select2-selection__rendered" id="select2-jr2p-container" title="Alaska">Alaska</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </p>
  </div>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><table style="border-spacing: 0"><tbody><tr><td class="gutter gl" style="text-align: right"><pre class="lineno">1
2
3</pre></td><td class="code"><pre><span class="nx">$</span><span class="p">(</span><span class="s2">".js-example-basic-hide-search"</span><span class="p">).</span><span class="nx">select2</span><span class="p">({</span>
  <span class="na">minimumResultsForSearch</span><span class="p">:</span> <span class="kc">Infinity</span>
<span class="p">});</span><span class="w">
</span></pre></td></tr></tbody></table></code></pre></figure>
</section>

      <section>
  <h1 id="programmatic-control" class="page-header"><a class="anchorjs-link " href="#programmatic-control" aria-label="Anchor link for: programmatic control" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>
    Programmatic control
  </h1>

  <h2 id="events"><a class="anchorjs-link " href="#events" aria-label="Anchor link for: events" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>DOM events</h2>

  <p>
    Select2 will trigger some events on the original select element,
    allowing you to integrate it with other components. You can find more
    information on events
    <a href="options.html#events">on the options page</a>.
  </p>

  <p>
    <code>change</code> is fired whenever an option is selected or removed.
  </p>

  <p>
    <code>select2:open</code> is fired whenever the dropdown is opened.
    <code>select2:opening</code> is fired before this and can be prevented.
  </p>

  <p>
    <code>select2:close</code> is fired whenever the dropdown is closed.
    <code>select2:closing</code> is fired before this and can be prevented.
  </p>

  <p>
    <code>select2:select</code> is fired whenever a result is selected.
    <code>select2:selecting</code> is fired before this and can be prevented.
  </p>

  <p>
    <code>select2:unselect</code> is fired whenever a result is unselected.
    <code>select2:unselecting</code> is fired before this and can be prevented.
  </p>

  <div class="s2-example">
    <p>
      <select class="js-states js-example-events form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
  <optgroup label="Alaskan/Hawaiian Time Zone">
    <option value="AK">Alaska</option>
    <option value="HI">Hawaii</option>
  </optgroup>
  <optgroup label="Pacific Time Zone">
    <option value="CA">California</option>
    <option value="NV">Nevada</option>
    <option value="OR">Oregon</option>
    <option value="WA">Washington</option>
  </optgroup>
  <optgroup label="Mountain Time Zone">
    <option value="AZ">Arizona</option>
    <option value="CO">Colorado</option>
    <option value="ID">Idaho</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NM">New Mexico</option>
    <option value="ND">North Dakota</option>
    <option value="UT">Utah</option>
    <option value="WY">Wyoming</option>
  </optgroup>
  <optgroup label="Central Time Zone">
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="IL">Illinois</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="OK">Oklahoma</option>
    <option value="SD">South Dakota</option>
    <option value="TX">Texas</option>
    <option value="TN">Tennessee</option>
    <option value="WI">Wisconsin</option>
  </optgroup>
  <optgroup label="Eastern Time Zone">
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="OH">Ohio</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WV">West Virginia</option>
  </optgroup>
</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ysf0-container"><span class="select2-selection__rendered" id="select2-ysf0-container" title="Alaska">Alaska</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </p>
    <p>
      <select class="js-states js-example-events form-control select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true">
  <optgroup label="Alaskan/Hawaiian Time Zone">
    <option value="AK">Alaska</option>
    <option value="HI">Hawaii</option>
  </optgroup>
  <optgroup label="Pacific Time Zone">
    <option value="CA">California</option>
    <option value="NV">Nevada</option>
    <option value="OR">Oregon</option>
    <option value="WA">Washington</option>
  </optgroup>
  <optgroup label="Mountain Time Zone">
    <option value="AZ">Arizona</option>
    <option value="CO">Colorado</option>
    <option value="ID">Idaho</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NM">New Mexico</option>
    <option value="ND">North Dakota</option>
    <option value="UT">Utah</option>
    <option value="WY">Wyoming</option>
  </optgroup>
  <optgroup label="Central Time Zone">
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="IL">Illinois</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="OK">Oklahoma</option>
    <option value="SD">South Dakota</option>
    <option value="TX">Texas</option>
    <option value="TN">Tennessee</option>
    <option value="WI">Wisconsin</option>
  </optgroup>
  <optgroup label="Eastern Time Zone">
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="OH">Ohio</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WV">West Virginia</option>
  </optgroup>
</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </p>
  </div>

  <div class="s2-event-log">
    <ul class="js-event-log"></ul>
  </div>

  <pre data-fill-from=".js-code-events" class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="kwd">var</span><span class="pln"> $eventLog </span><span class="pun">=</span><span class="pln"> $</span><span class="pun">(</span><span class="str">".js-event-log"</span><span class="pun">);</span></li><li class="L1"><span class="kwd">var</span><span class="pln"> $eventSelect </span><span class="pun">=</span><span class="pln"> $</span><span class="pun">(</span><span class="str">".js-example-events"</span><span class="pun">);</span></li><li class="L2"><span class="pln">&nbsp;</span></li><li class="L3"><span class="pln">$eventSelect</span><span class="pun">.</span><span class="pln">on</span><span class="pun">(</span><span class="str">"select2:open"</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(</span><span class="pln">e</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> log</span><span class="pun">(</span><span class="str">"select2:open"</span><span class="pun">,</span><span class="pln"> e</span><span class="pun">);</span><span class="pln"> </span><span class="pun">});</span></li><li class="L4"><span class="pln">$eventSelect</span><span class="pun">.</span><span class="pln">on</span><span class="pun">(</span><span class="str">"select2:close"</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(</span><span class="pln">e</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> log</span><span class="pun">(</span><span class="str">"select2:close"</span><span class="pun">,</span><span class="pln"> e</span><span class="pun">);</span><span class="pln"> </span><span class="pun">});</span></li><li class="L5"><span class="pln">$eventSelect</span><span class="pun">.</span><span class="pln">on</span><span class="pun">(</span><span class="str">"select2:select"</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(</span><span class="pln">e</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> log</span><span class="pun">(</span><span class="str">"select2:select"</span><span class="pun">,</span><span class="pln"> e</span><span class="pun">);</span><span class="pln"> </span><span class="pun">});</span></li><li class="L6"><span class="pln">$eventSelect</span><span class="pun">.</span><span class="pln">on</span><span class="pun">(</span><span class="str">"select2:unselect"</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(</span><span class="pln">e</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> log</span><span class="pun">(</span><span class="str">"select2:unselect"</span><span class="pun">,</span><span class="pln"> e</span><span class="pun">);</span><span class="pln"> </span><span class="pun">});</span></li><li class="L7"><span class="pln">&nbsp;</span></li><li class="L8"><span class="pln">$eventSelect</span><span class="pun">.</span><span class="pln">on</span><span class="pun">(</span><span class="str">"change"</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(</span><span class="pln">e</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> log</span><span class="pun">(</span><span class="str">"change"</span><span class="pun">);</span><span class="pln"> </span><span class="pun">});</span></li><li class="L9"><span class="pln">&nbsp;</span></li><li class="L0"><span class="kwd">function</span><span class="pln"> log </span><span class="pun">(</span><span class="pln">name</span><span class="pun">,</span><span class="pln"> evt</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span></li><li class="L1"><span class="pln">  </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(!</span><span class="pln">evt</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span></li><li class="L2"><span class="pln">    </span><span class="kwd">var</span><span class="pln"> args </span><span class="pun">=</span><span class="pln"> </span><span class="str">"{}"</span><span class="pun">;</span></li><li class="L3"><span class="pln">  </span><span class="pun">}</span><span class="pln"> </span><span class="kwd">else</span><span class="pln"> </span><span class="pun">{</span></li><li class="L4"><span class="pln">    </span><span class="kwd">var</span><span class="pln"> args </span><span class="pun">=</span><span class="pln"> JSON</span><span class="pun">.</span><span class="pln">stringify</span><span class="pun">(</span><span class="pln">evt</span><span class="pun">.</span><span class="kwd">params</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">(</span><span class="pln">key</span><span class="pun">,</span><span class="pln"> value</span><span class="pun">)</span><span class="pln"> </span><span class="pun">{</span></li><li class="L5"><span class="pln">      </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">value </span><span class="pun">&amp;&amp;</span><span class="pln"> value</span><span class="pun">.</span><span class="pln">nodeName</span><span class="pun">)</span><span class="pln"> </span><span class="kwd">return</span><span class="pln"> </span><span class="str">"[DOM node]"</span><span class="pun">;</span></li><li class="L6"><span class="pln">      </span><span class="kwd">if</span><span class="pln"> </span><span class="pun">(</span><span class="pln">value </span><span class="kwd">instanceof</span><span class="pln"> $</span><span class="pun">.</span><span class="typ">Event</span><span class="pun">)</span><span class="pln"> </span><span class="kwd">return</span><span class="pln"> </span><span class="str">"[$.Event]"</span><span class="pun">;</span></li><li class="L7"><span class="pln">      </span><span class="kwd">return</span><span class="pln"> value</span><span class="pun">;</span></li><li class="L8"><span class="pln">    </span><span class="pun">});</span></li><li class="L9"><span class="pln">  </span><span class="pun">}</span></li><li class="L0"><span class="pln">  </span><span class="kwd">var</span><span class="pln"> $e </span><span class="pun">=</span><span class="pln"> $</span><span class="pun">(</span><span class="str">"&lt;li&gt;"</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> name </span><span class="pun">+</span><span class="pln"> </span><span class="str">" -&gt; "</span><span class="pln"> </span><span class="pun">+</span><span class="pln"> args </span><span class="pun">+</span><span class="pln"> </span><span class="str">"&lt;/li&gt;"</span><span class="pun">);</span></li><li class="L1"><span class="pln">  $eventLog</span><span class="pun">.</span><span class="pln">append</span><span class="pun">(</span><span class="pln">$e</span><span class="pun">);</span></li><li class="L2"><span class="pln">  $e</span><span class="pun">.</span><span class="pln">animate</span><span class="pun">({</span><span class="pln"> opacity</span><span class="pun">:</span><span class="pln"> </span><span class="lit">1</span><span class="pln"> </span><span class="pun">},</span><span class="pln"> </span><span class="lit">10000</span><span class="pun">,</span><span class="pln"> </span><span class="str">'linear'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span></li><li class="L3"><span class="pln">    $e</span><span class="pun">.</span><span class="pln">animate</span><span class="pun">({</span><span class="pln"> opacity</span><span class="pun">:</span><span class="pln"> </span><span class="lit">0</span><span class="pln"> </span><span class="pun">},</span><span class="pln"> </span><span class="lit">2000</span><span class="pun">,</span><span class="pln"> </span><span class="str">'linear'</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span></li><li class="L4"><span class="pln">      $e</span><span class="pun">.</span><span class="pln">remove</span><span class="pun">();</span></li><li class="L5"><span class="pln">    </span><span class="pun">});</span></li><li class="L6"><span class="pln">  </span><span class="pun">});</span></li><li class="L7"><span class="pun">}</span></li></ol></pre>

<script type="text/javascript" class="js-code-events">
var $eventLog = $(".js-event-log");
var $eventSelect = $(".js-example-events");

$eventSelect.on("select2:open", function (e) { log("select2:open", e); });
$eventSelect.on("select2:close", function (e) { log("select2:close", e); });
$eventSelect.on("select2:select", function (e) { log("select2:select", e); });
$eventSelect.on("select2:unselect", function (e) { log("select2:unselect", e); });

$eventSelect.on("change", function (e) { log("change"); });

function log (name, evt) {
  if (!evt) {
    var args = "{}";
  } else {
    var args = JSON.stringify(evt.params, function (key, value) {
      if (value && value.nodeName) return "[DOM node]";
      if (value instanceof $.Event) return "[$.Event]";
      return value;
    });
  }
  var $e = $("<li>" + name + " -> " + args + "</li>");
  $eventLog.append($e);
  $e.animate({ opacity: 1 }, 10000, 'linear', function () {
    $e.animate({ opacity: 0 }, 2000, 'linear', function () {
      $e.remove();
    });
  });
}
</script>

  <h2 id="programmatic"><a class="anchorjs-link " href="#programmatic" aria-label="Anchor link for: programmatic" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Programmatic access</h2>

  <p>
    Select2 supports methods that allow programmatic control of the
    component.
  </p>

  <div class="s2-example">

    <p>
      <select class="js-example-programmatic js-states form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
  <optgroup label="Alaskan/Hawaiian Time Zone">
    <option value="AK">Alaska</option>
    <option value="HI">Hawaii</option>
  </optgroup>
  <optgroup label="Pacific Time Zone">
    <option value="CA">California</option>
    <option value="NV">Nevada</option>
    <option value="OR">Oregon</option>
    <option value="WA">Washington</option>
  </optgroup>
  <optgroup label="Mountain Time Zone">
    <option value="AZ">Arizona</option>
    <option value="CO">Colorado</option>
    <option value="ID">Idaho</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NM">New Mexico</option>
    <option value="ND">North Dakota</option>
    <option value="UT">Utah</option>
    <option value="WY">Wyoming</option>
  </optgroup>
  <optgroup label="Central Time Zone">
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="IL">Illinois</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="OK">Oklahoma</option>
    <option value="SD">South Dakota</option>
    <option value="TX">Texas</option>
    <option value="TN">Tennessee</option>
    <option value="WI">Wisconsin</option>
  </optgroup>
  <optgroup label="Eastern Time Zone">
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="OH">Ohio</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WV">West Virginia</option>
  </optgroup>
</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-gdcp-container"><span class="select2-selection__rendered" id="select2-gdcp-container" title="Alaska">Alaska</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </p>

    <div class="btn-toolbar" role="toolbar" aria-label="Programmatic control">
      <div class="btn-group btn-group-sm" aria-label="Set Select2 option">
        <button class="js-programmatic-set-val btn btn-default">
          Set "California"
        </button>
      </div>
      <div class="btn-group btn-group-sm" role="group" aria-label="Open and close">
        <button class="js-programmatic-open btn btn-default">
          Open
        </button>
        <button class="js-programmatic-close btn btn-default">
          Close
        </button>
      </div>
      <div class="btn-group btn-group-sm" role="group" aria-label="Initialize and destroy">
        <button class="js-programmatic-init btn btn-default">
          Init
        </button>
        <button class="js-programmatic-destroy btn btn-default">
          Destroy
        </button>
      </div>
    </div>

    <p>
      <select class="js-example-programmatic-multi js-states form-control select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true">
  <optgroup label="Alaskan/Hawaiian Time Zone">
    <option value="AK">Alaska</option>
    <option value="HI">Hawaii</option>
  </optgroup>
  <optgroup label="Pacific Time Zone">
    <option value="CA">California</option>
    <option value="NV">Nevada</option>
    <option value="OR">Oregon</option>
    <option value="WA">Washington</option>
  </optgroup>
  <optgroup label="Mountain Time Zone">
    <option value="AZ">Arizona</option>
    <option value="CO">Colorado</option>
    <option value="ID">Idaho</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NM">New Mexico</option>
    <option value="ND">North Dakota</option>
    <option value="UT">Utah</option>
    <option value="WY">Wyoming</option>
  </optgroup>
  <optgroup label="Central Time Zone">
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="IL">Illinois</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="OK">Oklahoma</option>
    <option value="SD">South Dakota</option>
    <option value="TX">Texas</option>
    <option value="TN">Tennessee</option>
    <option value="WI">Wisconsin</option>
  </optgroup>
  <optgroup label="Eastern Time Zone">
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="OH">Ohio</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WV">West Virginia</option>
  </optgroup>
</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </p>

    <div class="btn-group btn-group-sm" role="group" aria-label="Programmatic setting and clearing Select2 options">
      <button type="button" class="js-programmatic-multi-set-val btn btn-default">
        Set to California and Alabama
      </button>
      <button type="button" class="js-programmatic-multi-clear btn btn-default">
        Clear
      </button>
    </div>

  </div>

  <pre data-fill-from=".js-code-programmatic" class="prettyprint linenums"><ol class="linenums"><li class="L0"><span class="kwd">var</span><span class="pln"> $example </span><span class="pun">=</span><span class="pln"> $</span><span class="pun">(</span><span class="str">".js-example-programmatic"</span><span class="pun">).</span><span class="pln">select2</span><span class="pun">();</span></li><li class="L1"><span class="kwd">var</span><span class="pln"> $exampleMulti </span><span class="pun">=</span><span class="pln"> $</span><span class="pun">(</span><span class="str">".js-example-programmatic-multi"</span><span class="pun">).</span><span class="pln">select2</span><span class="pun">();</span></li><li class="L2"><span class="pln">&nbsp;</span></li><li class="L3"><span class="pln">$</span><span class="pun">(</span><span class="str">".js-programmatic-set-val"</span><span class="pun">).</span><span class="pln">on</span><span class="pun">(</span><span class="str">"click"</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> $example</span><span class="pun">.</span><span class="pln">val</span><span class="pun">(</span><span class="str">"CA"</span><span class="pun">).</span><span class="pln">trigger</span><span class="pun">(</span><span class="str">"change"</span><span class="pun">);</span><span class="pln"> </span><span class="pun">});</span></li><li class="L4"><span class="pln">&nbsp;</span></li><li class="L5"><span class="pln">$</span><span class="pun">(</span><span class="str">".js-programmatic-open"</span><span class="pun">).</span><span class="pln">on</span><span class="pun">(</span><span class="str">"click"</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> $example</span><span class="pun">.</span><span class="pln">select2</span><span class="pun">(</span><span class="str">"open"</span><span class="pun">);</span><span class="pln"> </span><span class="pun">});</span></li><li class="L6"><span class="pln">$</span><span class="pun">(</span><span class="str">".js-programmatic-close"</span><span class="pun">).</span><span class="pln">on</span><span class="pun">(</span><span class="str">"click"</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> $example</span><span class="pun">.</span><span class="pln">select2</span><span class="pun">(</span><span class="str">"close"</span><span class="pun">);</span><span class="pln"> </span><span class="pun">});</span></li><li class="L7"><span class="pln">&nbsp;</span></li><li class="L8"><span class="pln">$</span><span class="pun">(</span><span class="str">".js-programmatic-init"</span><span class="pun">).</span><span class="pln">on</span><span class="pun">(</span><span class="str">"click"</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> $example</span><span class="pun">.</span><span class="pln">select2</span><span class="pun">();</span><span class="pln"> </span><span class="pun">});</span></li><li class="L9"><span class="pln">$</span><span class="pun">(</span><span class="str">".js-programmatic-destroy"</span><span class="pun">).</span><span class="pln">on</span><span class="pun">(</span><span class="str">"click"</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> $example</span><span class="pun">.</span><span class="pln">select2</span><span class="pun">(</span><span class="str">"destroy"</span><span class="pun">);</span><span class="pln"> </span><span class="pun">});</span></li><li class="L0"><span class="pln">&nbsp;</span></li><li class="L1"><span class="pln">$</span><span class="pun">(</span><span class="str">".js-programmatic-multi-set-val"</span><span class="pun">).</span><span class="pln">on</span><span class="pun">(</span><span class="str">"click"</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> $exampleMulti</span><span class="pun">.</span><span class="pln">val</span><span class="pun">([</span><span class="str">"CA"</span><span class="pun">,</span><span class="pln"> </span><span class="str">"AL"</span><span class="pun">]).</span><span class="pln">trigger</span><span class="pun">(</span><span class="str">"change"</span><span class="pun">);</span><span class="pln"> </span><span class="pun">});</span></li><li class="L2"><span class="pln">$</span><span class="pun">(</span><span class="str">".js-programmatic-multi-clear"</span><span class="pun">).</span><span class="pln">on</span><span class="pun">(</span><span class="str">"click"</span><span class="pun">,</span><span class="pln"> </span><span class="kwd">function</span><span class="pln"> </span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln"> $exampleMulti</span><span class="pun">.</span><span class="pln">val</span><span class="pun">(</span><span class="kwd">null</span><span class="pun">).</span><span class="pln">trigger</span><span class="pun">(</span><span class="str">"change"</span><span class="pun">);</span><span class="pln"> </span><span class="pun">});</span></li></ol></pre>

<script type="text/javascript" class="js-code-programmatic">
var $example = $(".js-example-programmatic").select2();
var $exampleMulti = $(".js-example-programmatic-multi").select2();

$(".js-programmatic-set-val").on("click", function () { $example.val("CA").trigger("change"); });

$(".js-programmatic-open").on("click", function () { $example.select2("open"); });
$(".js-programmatic-close").on("click", function () { $example.select2("close"); });

$(".js-programmatic-init").on("click", function () { $example.select2(); });
$(".js-programmatic-destroy").on("click", function () { $example.select2("destroy"); });

$(".js-programmatic-multi-set-val").on("click", function () { $exampleMulti.val(["CA", "AL"]).trigger("change"); });
$(".js-programmatic-multi-clear").on("click", function () { $exampleMulti.val(null).trigger("change"); });
</script>

</section>

      <section>
  <h1 id="tags"><a class="anchorjs-link " href="#tags" aria-label="Anchor link for: tags" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Tagging support</h1>

  <p>
    Select2 can be used to quickly set up fields used for tagging.
  </p>

  <p>
    Note that when tagging is enabled the user can select from pre-existing
    options or create a new tag by picking the first choice, which is what
    the user has typed into the search box so far.
  </p>

  <div class="s2-example">
    <p>
      <select class="js-example-tags form-control select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true">
        <option selected="selected">orange</option>
        <option>white</option>
        <option selected="selected">purple</option>
      <option value="red">red</option><option value="blue">blue</option><option value="green">green</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="orange"><span class="select2-selection__choice__remove" role="presentation">×</span>orange</li><li class="select2-selection__choice" title="purple"><span class="select2-selection__choice__remove" role="presentation">×</span>purple</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </p>
  </div>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><table style="border-spacing: 0"><tbody><tr><td class="gutter gl" style="text-align: right"><pre class="lineno">1
2
3</pre></td><td class="code"><pre><span class="nx">$</span><span class="p">(</span><span class="s2">".js-example-tags"</span><span class="p">).</span><span class="nx">select2</span><span class="p">({</span>
  <span class="na">tags</span><span class="p">:</span> <span class="kc">true</span>
<span class="p">})</span><span class="w">
</span></pre></td></tr></tbody></table></code></pre></figure>
</section>

      <section>
  <h1 id="tokenizer"><a class="anchorjs-link " href="#tokenizer" aria-label="Anchor link for: tokenizer" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Automatic tokenization</h1>

  <p>
    Select2 supports ability to add choices automatically as the user is
    typing into the search field. Try typing in the search field below and
    entering a space or a comma.
  </p>

  <p>
    The separators that should be used when tokenizing can be specified
    using the <a href="options.html#tokenSeparators">tokenSeparators</a>
    options.
  </p>

  <div class="s2-example">
    <p>
      <select class="js-example-tokenizer form-control select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true">
        <option>red</option>
        <option>blue</option>
        <option>green</option>
      </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </p>
  </div>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><table style="border-spacing: 0"><tbody><tr><td class="gutter gl" style="text-align: right"><pre class="lineno">1
2
3
4</pre></td><td class="code"><pre><span class="nx">$</span><span class="p">(</span><span class="s2">".js-example-tokenizer"</span><span class="p">).</span><span class="nx">select2</span><span class="p">({</span>
  <span class="na">tags</span><span class="p">:</span> <span class="kc">true</span><span class="p">,</span>
  <span class="na">tokenSeparators</span><span class="p">:</span> <span class="p">[</span><span class="s1">','</span><span class="p">,</span> <span class="s1">' '</span><span class="p">]</span>
<span class="p">})</span><span class="w">
</span></pre></td></tr></tbody></table></code></pre></figure>
</section>

      <section>
  <h1 id="matcher"><a class="anchorjs-link " href="#matcher" aria-label="Anchor link for: matcher" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Customizing how results are matched</h1>

  <p>
    Unlike other dropdowns on this page, this one matches options only if
    the term appears in the beginning of the string as opposed to anywhere:
  </p>

  <p>
    This custom matcher uses a
    <a href="options.html#compat-matcher">compatibility module</a> that is
    only bundled in the
    <a href="index.html#builds-full">full version of Select2</a>. You also
    have the option of using a
    <a href="options.html#matcher">more complex matcher</a>.
  </p>

  <div class="s2-example">
    <p>
      <select class="js-example-matcher-start js-states form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
  <optgroup label="Alaskan/Hawaiian Time Zone">
    <option value="AK">Alaska</option>
    <option value="HI">Hawaii</option>
  </optgroup>
  <optgroup label="Pacific Time Zone">
    <option value="CA">California</option>
    <option value="NV">Nevada</option>
    <option value="OR">Oregon</option>
    <option value="WA">Washington</option>
  </optgroup>
  <optgroup label="Mountain Time Zone">
    <option value="AZ">Arizona</option>
    <option value="CO">Colorado</option>
    <option value="ID">Idaho</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NM">New Mexico</option>
    <option value="ND">North Dakota</option>
    <option value="UT">Utah</option>
    <option value="WY">Wyoming</option>
  </optgroup>
  <optgroup label="Central Time Zone">
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="IL">Illinois</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="OK">Oklahoma</option>
    <option value="SD">South Dakota</option>
    <option value="TX">Texas</option>
    <option value="TN">Tennessee</option>
    <option value="WI">Wisconsin</option>
  </optgroup>
  <optgroup label="Eastern Time Zone">
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="OH">Ohio</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WV">West Virginia</option>
  </optgroup>
</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-75r4-container"><span class="select2-selection__rendered" id="select2-75r4-container" title="Alaska">Alaska</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </p>
  </div>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><table style="border-spacing: 0"><tbody><tr><td class="gutter gl" style="text-align: right"><pre class="lineno">1
2
3
4
5
6
7
8
9
10
11
12
13</pre></td><td class="code"><pre><span class="kd">function</span> <span class="nx">matchStart</span> <span class="p">(</span><span class="nx">term</span><span class="p">,</span> <span class="nx">text</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">if</span> <span class="p">(</span><span class="nx">text</span><span class="p">.</span><span class="nx">toUpperCase</span><span class="p">().</span><span class="nx">indexOf</span><span class="p">(</span><span class="nx">term</span><span class="p">.</span><span class="nx">toUpperCase</span><span class="p">())</span> <span class="o">==</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span>
    <span class="k">return</span> <span class="kc">true</span><span class="p">;</span>
  <span class="p">}</span>

  <span class="k">return</span> <span class="kc">false</span><span class="p">;</span>
<span class="p">}</span>

<span class="nx">$</span><span class="p">.</span><span class="nx">fn</span><span class="p">.</span><span class="nx">select2</span><span class="p">.</span><span class="nx">amd</span><span class="p">.</span><span class="nx">require</span><span class="p">([</span><span class="s1">'select2/compat/matcher'</span><span class="p">],</span> <span class="kd">function</span> <span class="p">(</span><span class="nx">oldMatcher</span><span class="p">)</span> <span class="p">{</span>
  <span class="nx">$</span><span class="p">(</span><span class="s2">".js-example-matcher-start"</span><span class="p">).</span><span class="nx">select2</span><span class="p">({</span>
    <span class="na">matcher</span><span class="p">:</span> <span class="nx">oldMatcher</span><span class="p">(</span><span class="nx">matchStart</span><span class="p">)</span>
  <span class="p">})</span>
<span class="p">});</span><span class="w">
</span></pre></td></tr></tbody></table></code></pre></figure>
</section>

      <section>
  <h1 id="localization-rtl-diacritics" class="page-header"><a class="anchorjs-link " href="#localization-rtl-diacritics" aria-label="Anchor link for: localization rtl diacritics" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>
    Localization, RTL and diacritics support
  </h1>

  <h2 id="language"><a class="anchorjs-link " href="#language" aria-label="Anchor link for: language" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Multiple languages</h2>

  <p>
    Select2 supports displaying the messages in different languages, as well
    as providing your own
    <a href="options.html#language">custom messages</a>
    that can be displayed.
  </p>

  <p>
    The language does not have to be defined when Select2 is being
    initialized, but instead can be defined in the <code>[lang]</code>
    attribute of any parent elements as <code>[lang="es"]</code>.
  </p>

  <div class="s2-example">
    <p>
      <select class="js-example-language js-states form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
      
  <optgroup label="Alaskan/Hawaiian Time Zone">
    <option value="AK">Alaska</option>
    <option value="HI">Hawaii</option>
  </optgroup>
  <optgroup label="Pacific Time Zone">
    <option value="CA">California</option>
    <option value="NV">Nevada</option>
    <option value="OR">Oregon</option>
    <option value="WA">Washington</option>
  </optgroup>
  <optgroup label="Mountain Time Zone">
    <option value="AZ">Arizona</option>
    <option value="CO">Colorado</option>
    <option value="ID">Idaho</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NM">New Mexico</option>
    <option value="ND">North Dakota</option>
    <option value="UT">Utah</option>
    <option value="WY">Wyoming</option>
  </optgroup>
  <optgroup label="Central Time Zone">
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="IL">Illinois</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="OK">Oklahoma</option>
    <option value="SD">South Dakota</option>
    <option value="TX">Texas</option>
    <option value="TN">Tennessee</option>
    <option value="WI">Wisconsin</option>
  </optgroup>
  <optgroup label="Eastern Time Zone">
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="OH">Ohio</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WV">West Virginia</option>
  </optgroup>
</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-5gu8-container"><span class="select2-selection__rendered" id="select2-5gu8-container" title="Alaska">Alaska</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </p>
  </div>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><table style="border-spacing: 0"><tbody><tr><td class="gutter gl" style="text-align: right"><pre class="lineno">1
2
3</pre></td><td class="code"><pre><span class="nx">$</span><span class="p">(</span><span class="s2">".js-example-language"</span><span class="p">).</span><span class="nx">select2</span><span class="p">({</span>
  <span class="na">language</span><span class="p">:</span> <span class="s2">"es"</span>
<span class="p">});</span><span class="w">
</span></pre></td></tr></tbody></table></code></pre></figure>

  <h2 id="rtl"><a class="anchorjs-link " href="#rtl" aria-label="Anchor link for: rtl" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>RTL support</h2>

  <p>
    Select2 will work on RTL websites if the <code>dir</code> attribute is
    set on the <code>&lt;select&gt;</code> or any parents of it. You can also
    initialize Select2 with <code>dir: "rtl"</code> set.
  </p>

  <div class="s2-example">
    <p>
      <select class="js-example-rtl js-states form-control select2-hidden-accessible" dir="rtl" tabindex="-1" aria-hidden="true">
  <optgroup label="Alaskan/Hawaiian Time Zone">
    <option value="AK">Alaska</option>
    <option value="HI">Hawaii</option>
  </optgroup>
  <optgroup label="Pacific Time Zone">
    <option value="CA">California</option>
    <option value="NV">Nevada</option>
    <option value="OR">Oregon</option>
    <option value="WA">Washington</option>
  </optgroup>
  <optgroup label="Mountain Time Zone">
    <option value="AZ">Arizona</option>
    <option value="CO">Colorado</option>
    <option value="ID">Idaho</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NM">New Mexico</option>
    <option value="ND">North Dakota</option>
    <option value="UT">Utah</option>
    <option value="WY">Wyoming</option>
  </optgroup>
  <optgroup label="Central Time Zone">
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="IL">Illinois</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="OK">Oklahoma</option>
    <option value="SD">South Dakota</option>
    <option value="TX">Texas</option>
    <option value="TN">Tennessee</option>
    <option value="WI">Wisconsin</option>
  </optgroup>
  <optgroup label="Eastern Time Zone">
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="OH">Ohio</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WV">West Virginia</option>
  </optgroup>
</select><span class="select2 select2-container select2-container--default" dir="rtl" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-htv7-container"><span class="select2-selection__rendered" id="select2-htv7-container" title="Alaska">Alaska</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </p>
  </div>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><table style="border-spacing: 0"><tbody><tr><td class="gutter gl" style="text-align: right"><pre class="lineno">1
2
3</pre></td><td class="code"><pre><span class="nx">$</span><span class="p">(</span><span class="s2">".js-example-rtl"</span><span class="p">).</span><span class="nx">select2</span><span class="p">({</span>
  <span class="na">dir</span><span class="p">:</span> <span class="s2">"rtl"</span>
<span class="p">});</span><span class="w">
</span></pre></td></tr></tbody></table></code></pre></figure>

  <h2 id="diacritics"><a class="anchorjs-link " href="#diacritics" aria-label="Anchor link for: diacritics" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Diacritics support</h2>

  <p>
    Select2's default matcher will ignore diacritics, making it easier for
    users to filter results in international selects. Type "aero" into the
    select below.
  </p>

  <div class="s2-example">
    <p>
      <select class="js-example-diacritics form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
        <option>Aeróbics</option>
        <option>Aeróbics en Agua</option>
        <option>Aerografía</option>
        <option>Aeromodelaje</option>
        <option>Águilas</option>
        <option>Ajedrez</option>
        <option>Ala Delta</option>
        <option>Álbumes de Música</option>
        <option>Alusivos</option>
        <option>Análisis de Escritura a Mano</option>
      </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-k0kd-container"><span class="select2-selection__rendered" id="select2-k0kd-container" title="Aeróbics">Aeróbics</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </p>
  </div>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><table style="border-spacing: 0"><tbody><tr><td class="gutter gl" style="text-align: right"><pre class="lineno">1</pre></td><td class="code"><pre><span class="nx">$</span><span class="p">(</span><span class="s2">".js-example-diacritics"</span><span class="p">).</span><span class="nx">select2</span><span class="p">();</span><span class="w">
</span></pre></td></tr></tbody></table></code></pre></figure>
</section>

      <section>

  <h1 id="themes-templating-responsive-design" class="page-header"><a class="anchorjs-link " href="#themes-templating-responsive-design" aria-label="Anchor link for: themes templating responsive design" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>
    Themes, templating and responsive design
  </h1>

  <h2 id="themes"><a class="anchorjs-link " href="#themes" aria-label="Anchor link for: themes" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Theme support</h2>

  <p>
    Select2 supports custom themes using the
    <a href="options.html#theme">theme option</a>
    so you can style Select2 to match the rest of your application.
  </p>

  <p>
    These are using the <code>classic</code> theme, which matches the old
    look of Select2.
  </p>

  <div class="s2-example">
    <p>
      <select class="js-example-theme-single js-states form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
      
  <optgroup label="Alaskan/Hawaiian Time Zone">
    <option value="AK">Alaska</option>
    <option value="HI">Hawaii</option>
  </optgroup>
  <optgroup label="Pacific Time Zone">
    <option value="CA">California</option>
    <option value="NV">Nevada</option>
    <option value="OR">Oregon</option>
    <option value="WA">Washington</option>
  </optgroup>
  <optgroup label="Mountain Time Zone">
    <option value="AZ">Arizona</option>
    <option value="CO">Colorado</option>
    <option value="ID">Idaho</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NM">New Mexico</option>
    <option value="ND">North Dakota</option>
    <option value="UT">Utah</option>
    <option value="WY">Wyoming</option>
  </optgroup>
  <optgroup label="Central Time Zone">
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="IL">Illinois</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="OK">Oklahoma</option>
    <option value="SD">South Dakota</option>
    <option value="TX">Texas</option>
    <option value="TN">Tennessee</option>
    <option value="WI">Wisconsin</option>
  </optgroup>
  <optgroup label="Eastern Time Zone">
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="OH">Ohio</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WV">West Virginia</option>
  </optgroup>
</select><span class="select2 select2-container select2-container--classic" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-3azw-container"><span class="select2-selection__rendered" id="select2-3azw-container" title="Alaska">Alaska</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </p>
    <p>
      <select class="js-example-theme-multiple js-states form-control select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true">
  <optgroup label="Alaskan/Hawaiian Time Zone">
    <option value="AK">Alaska</option>
    <option value="HI">Hawaii</option>
  </optgroup>
  <optgroup label="Pacific Time Zone">
    <option value="CA">California</option>
    <option value="NV">Nevada</option>
    <option value="OR">Oregon</option>
    <option value="WA">Washington</option>
  </optgroup>
  <optgroup label="Mountain Time Zone">
    <option value="AZ">Arizona</option>
    <option value="CO">Colorado</option>
    <option value="ID">Idaho</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NM">New Mexico</option>
    <option value="ND">North Dakota</option>
    <option value="UT">Utah</option>
    <option value="WY">Wyoming</option>
  </optgroup>
  <optgroup label="Central Time Zone">
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="IL">Illinois</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="OK">Oklahoma</option>
    <option value="SD">South Dakota</option>
    <option value="TX">Texas</option>
    <option value="TN">Tennessee</option>
    <option value="WI">Wisconsin</option>
  </optgroup>
  <optgroup label="Eastern Time Zone">
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="OH">Ohio</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WV">West Virginia</option>
  </optgroup>
</select><span class="select2 select2-container select2-container--classic" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
    </p>
  </div>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><table style="border-spacing: 0"><tbody><tr><td class="gutter gl" style="text-align: right"><pre class="lineno">1
2
3
4
5
6
7</pre></td><td class="code"><pre><span class="nx">$</span><span class="p">(</span><span class="s2">".js-example-theme-single"</span><span class="p">).</span><span class="nx">select2</span><span class="p">({</span>
  <span class="na">theme</span><span class="p">:</span> <span class="s2">"classic"</span>
<span class="p">});</span>

<span class="nx">$</span><span class="p">(</span><span class="s2">".js-example-theme-multiple"</span><span class="p">).</span><span class="nx">select2</span><span class="p">({</span>
  <span class="na">theme</span><span class="p">:</span> <span class="s2">"classic"</span>
<span class="p">});</span><span class="w">
</span></pre></td></tr></tbody></table></code></pre></figure>

<h2 id="templating"><a class="anchorjs-link " href="#templating" aria-label="Anchor link for: templating" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Templating</h2>

<p>
  Various display options of the Select2 component can be changed:
  You can access the <code>&lt;option&gt;</code> element
  (or <code>&lt;optgroup&gt;</code>) and any attributes on those elements
  using <code>.element</code>.
</p>

<p>
  Templating is primarily controlled by the
  <a href="options.html#templateResult"><code>templateResult</code></a>
  and <a href="options.html#templateSelection"><code>templateSelection</code></a>
  options.
</p>

<div class="s2-example">
  <p>
    <select class="js-example-templating js-states form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
  <optgroup label="Alaskan/Hawaiian Time Zone">
    <option value="AK">Alaska</option>
    <option value="HI">Hawaii</option>
  </optgroup>
  <optgroup label="Pacific Time Zone">
    <option value="CA">California</option>
    <option value="NV">Nevada</option>
    <option value="OR">Oregon</option>
    <option value="WA">Washington</option>
  </optgroup>
  <optgroup label="Mountain Time Zone">
    <option value="AZ">Arizona</option>
    <option value="CO">Colorado</option>
    <option value="ID">Idaho</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NM">New Mexico</option>
    <option value="ND">North Dakota</option>
    <option value="UT">Utah</option>
    <option value="WY">Wyoming</option>
  </optgroup>
  <optgroup label="Central Time Zone">
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="IL">Illinois</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="OK">Oklahoma</option>
    <option value="SD">South Dakota</option>
    <option value="TX">Texas</option>
    <option value="TN">Tennessee</option>
    <option value="WI">Wisconsin</option>
  </optgroup>
  <optgroup label="Eastern Time Zone">
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="OH">Ohio</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WV">West Virginia</option>
  </optgroup>
</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-5c1e-container"><span class="select2-selection__rendered" id="select2-5c1e-container" title="Alaska"><span><img src="vendor/images/flags/ak.png" class="img-flag"> Alaska</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
  </p>
</div>

<figure class="highlight"><pre><code class="language-js" data-lang="js"><table style="border-spacing: 0"><tbody><tr><td class="gutter gl" style="text-align: right"><pre class="lineno">1
2
3
4
5
6
7
8
9
10
11</pre></td><td class="code"><pre><span class="kd">function</span> <span class="nx">formatState</span> <span class="p">(</span><span class="nx">state</span><span class="p">)</span> <span class="p">{</span>
  <span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nx">state</span><span class="p">.</span><span class="nx">id</span><span class="p">)</span> <span class="p">{</span> <span class="k">return</span> <span class="nx">state</span><span class="p">.</span><span class="nx">text</span><span class="p">;</span> <span class="p">}</span>
  <span class="kd">var</span> <span class="nx">$state</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span>
    <span class="s1">'&lt;span&gt;&lt;img src="vendor/images/flags/'</span> <span class="o">+</span> <span class="nx">state</span><span class="p">.</span><span class="nx">element</span><span class="p">.</span><span class="nx">value</span><span class="p">.</span><span class="nx">toLowerCase</span><span class="p">()</span> <span class="o">+</span> <span class="s1">'.png" class="img-flag" /&gt; '</span> <span class="o">+</span> <span class="nx">state</span><span class="p">.</span><span class="nx">text</span> <span class="o">+</span> <span class="s1">'&lt;/span&gt;'</span>
  <span class="p">);</span>
  <span class="k">return</span> <span class="nx">$state</span><span class="p">;</span>
<span class="p">};</span>

<span class="nx">$</span><span class="p">(</span><span class="s2">".js-example-templating"</span><span class="p">).</span><span class="nx">select2</span><span class="p">({</span>
  <span class="na">templateResult</span><span class="p">:</span> <span class="nx">formatState</span>
<span class="p">});</span><span class="w">
</span></pre></td></tr></tbody></table></code></pre></figure>

<h2 id="responsive"><a class="anchorjs-link " href="#responsive" aria-label="Anchor link for: responsive" data-anchorjs-icon="" style="font-family: anchorjs-icons; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>Responsive design - Percent width</h2>

<p>
  Select2's width can be set to a percentage of its parent to support
  responsive design. The two Select2 boxes below are styled to 50% and 75%
  width respectively.
</p>

<div class="s2-example">
  <p>
    <select class="js-example-responsive js-states select2-hidden-accessible" style="width: 50%" tabindex="-1" aria-hidden="true">
  <optgroup label="Alaskan/Hawaiian Time Zone">
    <option value="AK">Alaska</option>
    <option value="HI">Hawaii</option>
  </optgroup>
  <optgroup label="Pacific Time Zone">
    <option value="CA">California</option>
    <option value="NV">Nevada</option>
    <option value="OR">Oregon</option>
    <option value="WA">Washington</option>
  </optgroup>
  <optgroup label="Mountain Time Zone">
    <option value="AZ">Arizona</option>
    <option value="CO">Colorado</option>
    <option value="ID">Idaho</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NM">New Mexico</option>
    <option value="ND">North Dakota</option>
    <option value="UT">Utah</option>
    <option value="WY">Wyoming</option>
  </optgroup>
  <optgroup label="Central Time Zone">
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="IL">Illinois</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="OK">Oklahoma</option>
    <option value="SD">South Dakota</option>
    <option value="TX">Texas</option>
    <option value="TN">Tennessee</option>
    <option value="WI">Wisconsin</option>
  </optgroup>
  <optgroup label="Eastern Time Zone">
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="OH">Ohio</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WV">West Virginia</option>
  </optgroup>
</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 50%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-3eks-container"><span class="select2-selection__rendered" id="select2-3eks-container" title="Alaska">Alaska</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
  </p>
  <p>
    <select class="js-example-responsive js-states select2-hidden-accessible" multiple="" style="width: 75%" tabindex="-1" aria-hidden="true">
  <optgroup label="Alaskan/Hawaiian Time Zone">
    <option value="AK">Alaska</option>
    <option value="HI">Hawaii</option>
  </optgroup>
  <optgroup label="Pacific Time Zone">
    <option value="CA">California</option>
    <option value="NV">Nevada</option>
    <option value="OR">Oregon</option>
    <option value="WA">Washington</option>
  </optgroup>
  <optgroup label="Mountain Time Zone">
    <option value="AZ">Arizona</option>
    <option value="CO">Colorado</option>
    <option value="ID">Idaho</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NM">New Mexico</option>
    <option value="ND">North Dakota</option>
    <option value="UT">Utah</option>
    <option value="WY">Wyoming</option>
  </optgroup>
  <optgroup label="Central Time Zone">
    <option value="AL">Alabama</option>
    <option value="AR">Arkansas</option>
    <option value="IL">Illinois</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="OK">Oklahoma</option>
    <option value="SD">South Dakota</option>
    <option value="TX">Texas</option>
    <option value="TN">Tennessee</option>
    <option value="WI">Wisconsin</option>
  </optgroup>
  <optgroup label="Eastern Time Zone">
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="IN">Indiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="OH">Ohio</option>
    <option value="PA">Pennsylvania</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WV">West Virginia</option>
  </optgroup>
</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 75%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
  </p>
</div>

<figure class="highlight"><pre><code class="language-html" data-lang="html"><table style="border-spacing: 0"><tbody><tr><td class="gutter gl" style="text-align: right"><pre class="lineno">1
2</pre></td><td class="code"><pre><span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"js-example-responsive"</span> <span class="na">style=</span><span class="s">"width: 50%"</span><span class="nt">&gt;&lt;/select&gt;</span>
<span class="nt">&lt;select</span> <span class="na">class=</span><span class="s">"js-example-responsive"</span> <span class="na">multiple=</span><span class="s">"multiple"</span> <span class="na">style=</span><span class="s">"width: 75%"</span><span class="nt">&gt;&lt;/select&gt;</span><span class="w">
</span></pre></td></tr></tbody></table></code></pre></figure>

<div class="alert alert-warning">
  Select2 will do its best to resolve the percent width specified via a
  css class, but it is not always possible. The best way to ensure that
  Select2 is using a percent based width is to inline the
  <code>style</code> declaration into the tag.
</div>
</section>


    </div>
    <div class="col-md-3" role="complementary">

      <nav class="s2-docs-sidebar hidden-print hidden-xs hidden-sm affix">
  <ul class="nav s2-docs-sidenav">
    <li>
      <a href="#basics">The basics</a>
      <ul class="nav">
        <li>
          <a href="#single">Single select boxes</a>
        </li>
        <li>
          <a href="#multiple">Multiple select boxes</a>
        </li>
      </ul>
    </li>
    <li>
      <a href="#placeholders">Placeholders</a>
    </li>
    <li class="active">
      <a href="#data">
        Data sources
      </a>
      <ul class="nav">
        <li class="">
          <a href="#data-array">Loading array data</a>
        </li>
        <li class="active">
          <a href="#data-ajax">Loading remote data</a>
        </li>
      </ul>
    </li>
    <li class="">
      <a href="#disabled">Disabled mode</a>
    </li>
    <li>
      <a href="#disabled-results">Disabled results</a>
    </li>
    <li>
      <a href="#multiple-max">Limiting the number of selections</a>
    </li>
    <li>
      <a href="#hide-search">Hiding the search box</a>
    </li>
    <li>
      <a href="#programmatic-control">Programmatic control</a>
      <ul class="nav">
        <li>
          <a href="#events">DOM events</a>
        </li>
        <li>
          <a href="#programmatic">Programmatic access</a>
        </li>
      </ul>
    </li>
    <li>
      <a href="#tags">Tagging support</a>
    </li>
    <li>
      <a href="#tokenizer">Automatic tokenization</a>
    </li>
    <li>
      <a href="#matcher">Customizing how results are matched</a>
    </li>
    <li>
      <a href="#localization-rtl-diacritics">Localization, RTL and diacritics support</a>
      <ul class="nav">
        <li>
          <a href="#language">Multiple languages</a>
        </li>
        <li>
          <a href="#rtl">RTL support</a>
        </li>
        <li>
          <a href="#diacritics">Diacritics support</a>
        </li>
      </ul>
    </li>
    <li>
      <a href="#themes-templating-responsive-design">
        Themes, templating and responsive design
      </a>
      <ul class="nav">
        <li>
          <a href="#themes">Theme support</a>
        </li>
        <li>
          <a href="#templating">Templating</a>
        </li>
        <li>
          <a href="#responsive">Responsive design</a>
        </li>
      </ul>
    </li>
  </ul>
  <a class="back-to-top" href="#top">
    Back to top
  </a>
</nav>


    </div>
  </div>
</div>




<script type="text/javascript">
  var $states = $(".js-source-states");
  var statesOptions = $states.html();
  $states.remove();

  $(".js-states").append(statesOptions);

  $("[data-fill-from]").each(function () {
    var $this = $(this);

    var codeContainer = $this.data("fill-from");
    var $container = $(codeContainer);

    var code = $.trim($container.html());

    $this.text(code);
    $this.addClass("prettyprint linenums");
  });

  prettyPrint();

  $.fn.select2.amd.require([
    "select2/core",
    "select2/utils",
    "select2/compat/matcher"
  ], function (Select2, Utils, oldMatcher) {
    var $basicSingle = $(".js-example-basic-single");
    var $basicMultiple = $(".js-example-basic-multiple");
    var $limitMultiple = $(".js-example-basic-multiple-limit");

    var $dataArray = $(".js-example-data-array");
    var $dataArraySelected = $(".js-example-data-array-selected");

    var data = [
      { id: 0, text: 'enhancement' },
      { id: 1, text: 'bug' },
      { id: 2, text: 'duplicate' },
      { id: 3, text: 'invalid' },
      { id: 4, text: 'wontfix' }
    ];

    var $ajax = $(".js-example-data-ajax");

    var $disabledResults = $(".js-example-disabled-results");

    var $tags = $(".js-example-tags");

    var $matcherStart = $('.js-example-matcher-start');

    var $diacritics = $(".js-example-diacritics");
    var $language = $(".js-example-language");

    $.fn.select2.defaults.set("width", "100%");

    $basicSingle.select2();
    $basicMultiple.select2();
    $limitMultiple.select2({
      maximumSelectionLength: 2
    });

    function formatState (state) {
      if (!state.id) {
        return state.text;
      }
      var $state = $(
        '<span>' +
          '<img src="vendor/images/flags/' +
            state.element.value.toLowerCase() +
          '.png" class="img-flag" /> ' +
          state.text +
        '</span>'
      );
      return $state;
    };

    $(".js-example-templating").select2({
      templateResult: formatState,
      templateSelection: formatState
    });

    $dataArray.select2({
      data: data
    });

    $dataArraySelected.select2({
      data: data
    });

    function formatRepo (repo) {
      if (repo.loading) return repo.text;

      var markup = "<div class='select2-result-repository clearfix'>" +
        "<div class='select2-result-repository__avatar'><img src='" + repo.owner.avatar_url + "' /></div>" +
        "<div class='select2-result-repository__meta'>" +
          "<div class='select2-result-repository__title'>" + repo.full_name + "</div>";

      if (repo.description) {
        markup += "<div class='select2-result-repository__description'>" + repo.description + "</div>";
      }

      markup += "<div class='select2-result-repository__statistics'>" +
        "<div class='select2-result-repository__forks'><i class='fa fa-flash'></i> " + repo.forks_count + " Forks</div>" +
        "<div class='select2-result-repository__stargazers'><i class='fa fa-star'></i> " + repo.stargazers_count + " Stars</div>" +
        "<div class='select2-result-repository__watchers'><i class='fa fa-eye'></i> " + repo.watchers_count + " Watchers</div>" +
      "</div>" +
      "</div></div>";

      return markup;
    }

    function formatRepoSelection (repo) {
      return repo.full_name || repo.text;
    }

    $ajax.select2({
      ajax: {
        url: "https://api.github.com/search/repositories",
        dataType: 'json',
        delay: 250,
        data: function (params) {
          return {
            q: params.term, // search term
            page: params.page
          };
        },
        processResults: function (data, params) {
          // parse the results into the format expected by Select2
          // since we are using custom formatting functions we do not need to
          // alter the remote JSON data, except to indicate that infinite
          // scrolling can be used
          params.page = params.page || 1;

          return {
            results: data.items,
            pagination: {
              more: (params.page * 30) < data.total_count
            }
          };
        },
        cache: true
      },
      escapeMarkup: function (markup) { return markup; },
      minimumInputLength: 1,
      templateResult: formatRepo,
      templateSelection: formatRepoSelection
    });

    $(".js-example-disabled").select2();
    $(".js-example-disabled-multi").select2();

    $(".js-example-responsive").select2({
        width: 'resolve' // need to override the changed default
    });

    $disabledResults.select2();

    $(".js-example-programmatic").select2();
    $(".js-example-programmatic-multi").select2();

    $eventSelect.select2();

    $tags.select2({
      tags: ['red', 'blue', 'green']
    });

    $(".js-example-tokenizer").select2({
      tags: true,
      tokenSeparators: [',', ' ']
    });

    function matchStart (term, text) {
      if (text.toUpperCase().indexOf(term.toUpperCase()) == 0) {
        return true;
      }

      return false;
    }

    $matcherStart.select2({
      matcher: oldMatcher(matchStart)
    });

    $(".js-example-basic-hide-search").select2({
      minimumResultsForSearch: Infinity
    });

    $diacritics.select2();

    $language.select2({
      language: "es"
    });

    $(".js-example-theme-single").select2({
      theme: "classic"
    });

    $(".js-example-theme-multiple").select2({
      theme: "classic"
    });

    $(".js-example-rtl").select2();
  });
</script>


    <footer class="s2-docs-footer" role="contentinfo">
  <div class="container">
    <div class="s2-docs-social">
  <ul class="s2-docs-social-buttons">
    <li>
      <iframe class="github-btn" src="https://ghbtns.com/github-btn.html?user=select2&amp;repo=select2&amp;type=watch&amp;count=true" width="100" height="20" title="Star on GitHub"></iframe>
    </li>
    <li>
      <iframe class="github-btn" src="https://ghbtns.com/github-btn.html?user=select2&amp;repo=select2&amp;type=fork&amp;count=true" width="102" height="20" title="Fork on GitHub"></iframe>
    </li>
  </ul>
</div>

    <p>
      Select2 is licensed under <a href="https://github.com/select2/select2/blob/master/LICENSE.md">MIT</a>, documentation under <a href="https://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.
    </p>
    <p>
      Maintained by <a href="https://github.com/kevin-brown">Kevin Brown</a> and <a href="https://github.com/ivaynberg">Igor Vaynberg</a> with the help of <a href="https://github.com/select2/select2/graphs/contributors">our contributors</a>.
    </p>
    <ul class="s2-docs-footer-links">
      <li>Currently v4.0.3</li>
      <li><a href="https://github.com/select2/select2">GitHub</a></li>
      <li><a href="./examples.html">Examples</a></li>
      <li><a href="./options.html">Options</a></li>
      <li><a href="http://select2.github.io/select2/">v3.5.2 docs</a></li>
      <li><a href="https://github.com/select2/select2/issues">Issues</a></li>
      <li><a href="https://github.com/select2/select2/releases">Releases</a></li>
    </ul>
  </div>
</footer>


    <script>
      (function ($) {
        'use strict';

        $(function () {
          var $window = $(window);
          var $body = $(document.body);
          var $sidebar = $('.s2-docs-sidebar');

          $body.scrollspy({
            target: '.s2-docs-sidebar',
            offset: 40
          });

          $window.on('load', function () {
            $body.scrollspy('refresh');
          });

          $sidebar.affix({
            offset: {
              top: function () {
                var offsetTop = $sidebar.offset().top;
                var navOuterHeight = $('.s2-docs-nav').height();

                return (this.top = offsetTop - navOuterHeight);
              },
              bottom: function () {
                return (this.bottom = $('.s2-docs-footer').outerHeight(true));
              }
            }
          });
        });
      })(jQuery);

      (function () {
        'use strict';

        anchors.options.placement = 'left';
        anchors.add('.s2-docs-container h1, .s2-docs-container h2, .s2-docs-container h3, .s2-docs-container h4, .s2-docs-container h5');
      })();
    </script>

    <script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57144786-2', 'auto');
  ga('send', 'pageview');
</script>

  

<span class="select2-container select2-container--default select2-container--open" style="position: absolute; top: 3155px; left: 35.5px;"><span class="select2-dropdown select2-dropdown--below" dir="ltr" style="width: 720px;"><span class="select2-search select2-search--dropdown"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox"></span><span class="select2-results"><ul class="select2-results__options" role="tree" id="select2-w1l6-results" aria-expanded="true" aria-hidden="false"><li role="treeitem" aria-live="assertive" class="select2-results__option select2-results__message">Please enter 1 or more characters</li></ul></span></span></span></body></html>