<!DOCTYPE html>
<html>
<head>
	<title>Roman's Site | Apps</title>
	<?php require 'embedgist.php'; ?>
</head>
<body>
<header>
	<?php require 'parts/menu.php'; ?>
</header>
<script type="text/javascript">hljs.initHighlightingOnLoad();</script>
<div class="modal is-active">
  <div class="modal-background"></div>
  <div class="modal-card">
    <header class="modal-card-head">
      <p class="modal-card-title">App: hippodrome.py</p>
      <button class="delete" aria-label="close"></button>
    </header>
    <section class="modal-card-body">
      <pre>
      	<code class="python">
      		<?= embed_github_gist('13f7c54a54d25918135c86e27469898a'); ?>
      	</code>
      </pre>
    </section>
    <footer class="modal-card-foot">
    </footer>
  </div>
</div>
</body>
</html>