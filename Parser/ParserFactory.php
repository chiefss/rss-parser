<?

namespace Parser;

class ParserFactory {

	public static function create($type) {
		switch ($type) {
			case 'rss':
				return new RssParser();
			default:
				throw new \Exception('parser type not found');
		}
	}

}