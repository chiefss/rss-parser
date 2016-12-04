<?

namespace Parser;

abstract class ParserAbstract {

	protected $uri;

	abstract public function read($uri);

}