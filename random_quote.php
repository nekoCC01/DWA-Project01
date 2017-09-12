<?php

$quotes = [
    "It is better to travel well than to arrive. - Buddha",
	"All truly great thoughts are conceived by walking. - Friedrich Nietzsche",
	"I don't know what my path is yet. I'm just walking on it. - Olivia Newton-John"
];

shuffle($quotes);

$random_quote = array_pop($quotes);
