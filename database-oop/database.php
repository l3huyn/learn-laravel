<?php

//Require file config để có thể dùng các hằng vừa khai báo
require "config.php";
class DB
{
  public $conn;

  // -----Hàm xây dựng sẽ tự động kết nối đến DB
  function __construct()
  {
    $this->connection(); #$this ở đây chính là lớp DB
  }

  //-----Phương thức connection()
  function connection()
  {
    #Câu lệnh kết nối DB
    $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    #Kiểm tra nếu có lỗi
    if ($this->conn->connect_error) {
      die("Kết nối cơ sở dữ liệu thất bại: " . $this->conn->connect_error);
    }
  }

  //-----Phương thức escape_string() dùng để bảo vệ trước các cuộc tấn công SQL Injection
  function escape_string($str)
  {
    return $this->conn->real_escape_string($str);
  }

  //-----Phương thức query() dùng để thực thi chuỗi truy vấn
  function query($sql)
  {
    return $this->conn->query($sql);
  }

  //-----Phương thức insert()
  function insert($table, $data)
  {
    foreach ($data as $key => $value) {
      $list_field[] = "`{$key}`";
      $list_value[] = "'{$this->escape_string($value)}'"; #Sử dụng phương thức escape_string để tránh SQL Injection
    }

    $list_field = implode(',', $list_field);
    $list_value = implode(',', $list_value);

    $sql = "INSERT INTO {$table} ({$list_field}) VALUES ({$list_value})";

    #Thực hiện câu truy vấn 
    if ($this->query($sql) == TRUE) {
      return $this->conn->insert_id; #Trả về ID vừa insert 
    } else {
      echo "Error: " . $this->conn->error;
    }

    echo $sql;
  }

  // ---- Phương thức get() dùng để lấy danh sách bản ghi
  function get($table, $field = array(), $where = "")
  {
    $field = !empty($field) ? implode(',', $field) : "*";
    $where = !empty($where) ? "WHERE {$where}" : "";
    $sql = "SELECT {$field} FROM {$table} {$where}";

    $result = $this->query($sql);
    if ($result->num_rows > 0) {
      $data = array();
      while ($row = $result->fetch_assoc()) {
        $data[] = $row;
      }
      if (count($data) > 1) {
        return $data;
      } else {
        return $data[0];
      }
    } else {
      echo "No rows found";
    }
  }

  // ----- Phương thức update() dùng để cập nhật dữ liệu
  function update($table, $data = array(), $where = "")
  {
    $data_insert = array();
    foreach ($data as $key => $value) {
      $data_insert[] = "`{$key}` = '{$value}'";
    }
    $data_insert = implode(', ', $data_insert);
    $where = !empty($where) ? "WHERE {$where}" : "";

    $sql = "UPDATE {$table} SET {$data_insert} {$where}";

    if ($this->query($sql) == TRUE) {
      echo "Cập nhật thành công";
    } else {
      echo "Lỗi: " . $this->conn->error;
    }
  }

  // ----- Phương thức delete() xóa bản ghi
  function delete($table, $where = "")
  {
    $where = !empty($where) ? "WHERE {$where}" : "";
    $sql = "DELETE FROM {$table} {$where}";

    if ($this->query($sql) === TRUE) {
      echo "Đã xóa thành công";
    } else {
      echo "Lỗi: " . $this->conn->error;
    }
  }
}

//Tạo đối tượng $db
$db = new DB();

$db->delete('users', 'id = 2');
