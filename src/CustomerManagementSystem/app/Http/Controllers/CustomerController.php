<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer; // 追加
use App\Http\Requests\ValiDateRequest; // 追加

class CustomerController extends Controller {

    // 一覧表示
    public function getIndex(Request $request) {
        // キーワード受け取り
        $keyword = $request->input('keyword');
        // クエリ取得
        $query = Customer::query();
        // 条件分岐 (キーワードがあった場合)
        if(!empty($keyword)) {
            $query->where('name', 'like', '%'.$keyword.'%');
            $query->orWhere('email', 'like', '%'.$keyword.'%');
        }
        // 昇順に並べ替えて5件取得
        $customers = $query->orderBy('id', 'asc')->paginate(5);
        // indexに結果を返す (検索した場合は検索結果を返す)
        return view('customer.index')->with('customers', $customers)->with('keyword', $keyword);
    }

    // 新規登録 (入力)
    public function newIndex() {
        // newIndexのbladeファイルに戻り値を返す
        return view('customer.newIndex');
    }

    // 新規登録 (確認)
    public function newConfirm(ValiDateRequest $request) {
        // 入力されたリクエストを全件取得
        $data = $request->all();
        // 取得したデータを元に、newConfirmのbladeファイルに戻り値を返す
        return view('customer.newConfirm')->with($data);
    }

    // 新規登録 (登録)
    public function newFinish(Request $request) {
        // Customerのインスタンスを生成
        $customer = new Customer();
        // 値の登録
        $customer->name    = $request->name;
        $customer->address = $request->address;
        $customer->tel     = $request->tel;
        $customer->email   = $request->email;
        // 保存
        $customer->save();
        // 一覧にリダイレクト
        return redirect()->to('customer/list')->with('flashmessage', '登録が完了しました。');
    }

    // 編集画面 (入力)
    public function editIndex($id) {
        // 該当レコードの抽出
        $customer = Customer::findOrFail($id);
        // editIndexのbladeファイルに戻り値を返す
        return view('customer.editIndex')->with('customer', $customer);
    }

    // 編集画面 (確認)
    public function editConfirm(ValiDateRequest $request) {
        // 選択されたidのデータを全件取得
        $data = $request->all();
        // 取得したデータを元に、editConfirmのbladeファイルに戻り値を返す
        return view('customer.editConfirm')->with($data);
    }

    // 編集画面 (完了)
    public function editFinish(Request $request, $id) {
        // 該当レコードを抽出
        $customer = Customer::findOrFail($id);
        // 値の登録
        $customer->name    = $request->name;
        $customer->address = $request->address;
        $customer->tel     = $request->tel;
        $customer->email   = $request->email;
        // 保存
        $customer->save();
        // 一覧にリダイレクト
        return redirect()->to('customer/list')->with('flashmessage', '  更新が完了しました。');
    }

    // 詳細画面
    public function detailIndex($id) {
        // 該当レコードの抽出
        $customer = Customer::findOrFail($id);
        // detailIndexのbladeファイルに戻り値を返す
        return view('customer.detailIndex')->with('customer', $customer);
    }

    // 削除
    public function usDelete($id) {
        // 主キーのidを取得し$userへ代入
        $user = Customer::find($id);
        // 削除
        $user->delete();
        // 一覧にリダイレクト
        return redirect()->to('customer/list')->with('flashmessage', '削除が完了しました。');
    }
}
