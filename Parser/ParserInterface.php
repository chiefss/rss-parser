<?

namespace Parser;

interface ParserInterface {

	public function read($uri);

	public function next();

	public function getEntry();

}