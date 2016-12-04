<?

namespace Parser;

class RssParser extends ParserAbstract implements ParserInterface {

	protected $feed;
	protected $node;

	public function read($uri) {
		if (empty($uri)) {
			throw new \Exception('uri is empty');
		}
		$this->feed = new \XMLReader();
		$this->feed->open($uri);
	}

	public function next() {
	    while ($this->feed->read()) {
			if ($this->feed->nodeType === \XMLReader::ELEMENT && $this->feed->localName === 'item') {
				$this->node = $this->feed->expand();
				return true;
			}
		}
		return false;
	}

	public function getEntry() {
		$return_value = new Entry();
		$dom = new \DomDocument();
		$node = $dom->importNode($this->node, true);
		$dom->appendChild($node);
		if ($xml = simplexml_import_dom($node)) {
			$return_value->fromArray([
				'title' => (string) $xml->title,
				'link' => (string) $xml->link,
				'description' => (string) $xml->description,
			]);
		}
		return $return_value;
	}

}