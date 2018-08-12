<!DOCTYPE html>
<html>
<head>
	<title>Roman's Site | Apps</title>
	<?php include 'embedgist.php'; ?>
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
      
    </section>
    <footer class="modal-card-foot">
    </footer>
  </div>
</div>
<pre>
  <code class="python">
import random, time

RD = 10**8

def randDouble():
  i = random.randint(0, RD)
  return i / RD

class Horse:
  def __init__(self, name, c, s = 3, d = 0):
    self.name, self.speed, self.ch, self.dist = name, s, c, d

  def move(self):
    self.dist += randDouble() * self.speed

  def print(self):
    print (('.' * int(self.dist)) + self.ch)

class Hippodrome:
  game = None

  def __init__(self, listH):
    self.horses = listH

  def move(self):
    for h in self.horses:
      h.move()

  def print(self):
    for h in self.horses:
      h.print()
    for i in range(0, 10):
      print()

  def run(self):
    for i in range(100):
      self.move()
      self.print()
      time.sleep(.2)

  @property
  def winner(self):
    max_val = max([x.dist for x in self.horses])
    for h in self.horses:
      if max_val == h.dist:
        return h

  @property
  def looser(self):
    max_val = min([x.dist for x in self.horses])
    for h in self.horses:
      if max_val == h.dist:
        return h
END_INPUT = 'quit'
def main():
  print ('Enter data of horses in format "name$speed$raceChar". To reach end, type "%s"' % END_INPUT)
  horses = []
  while 1:
    s = input()
    name = s.split('$')[0]
    speed = int(s.split('$')[1])
    rc = s.split('$')[2][0]
    horses.append(Horse(name, rc, s=speed))
  Hippodrome.game = Hippodrome(horses)
  Hippodrome.game.run()
  print ('Winner is %s!' % Hippodrome.game.winner.name)
  print ('Looser is %s!' % Hippodrome.game.looser.name)
if __name__ == '__main__':
  main()
  </code>
</pre>
</body>
</html>