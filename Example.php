<?

/**
 *
 * EXAMPLE
 *
 */

$url = 'http://example.com/rss';
$parser = Parser\ParserFactory::create('rss');
$parser->read($url);
while ($parser->next()) {
    $entry = $parser->getEntry();
    // handle $entry
}