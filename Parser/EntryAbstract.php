<?

namespace Parser;

abstract class EntryAbstract {

	public function __construct($data = []) {
		if ($data) {
			$this->fromArray($data);
		}
	}

	public function fromArray($data) {
		$fields = get_object_vars($this);
		foreach (array_keys($fields) as $field_name) {
			if (isset($data[$field_name])) {
				$this->$field_name = $data[$field_name];
			}
		}
	}

}