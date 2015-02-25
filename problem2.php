/* Implementiraj funkciju koja proverava da li su zagrade unutar datog stringa ispravno uparene. */

function check_brackets($str) {
    return FALSE;
}

assert(check_brackets('asd') === TRUE);
assert(check_brackets('(asd)') === TRUE);
assert(check_brackets('(asd))') === FALSE);
assert(check_brackets('(asd()') === FALSE);
assert(check_brackets('a(s[d]fg)h{}jk') === TRUE);
assert(check_brackets('[{]]') === FALSE);
