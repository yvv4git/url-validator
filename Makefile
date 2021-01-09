.PHONY: tests

autoload_reset:
	composer dump-autoload -o

tests:
	composer tests

tests_visual:
	composer tests_debug