<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Survey</title>
</head>

<body>
    <div class="menu">
        <h1>Survey</h1>
    </div>

    <!-- サンプル↓ -->
    <form action="write.php" method="post">
        <div class="qarea">
            <p class ="questionTitle">問1 性別をお答えください。</p>
            <div class="aarea">
                <input type="radio" id="male" name="sex" value="male">
                <label for="male">男性</label>
                <input type="radio" id="female" name="sex" value="female">
                <label for="female">女性</label>
                <input type="radio" id="non-binary" name="sex" value="non-binary">
                <label for="non-binary">ノンバイナリ</label>
            </div>
        </div>
        <div class="qarea">
            <p class ="questionTitle">問2 年齢をお答えください。</p>
            <div class="aarea">
                <select id="age" name="age">
                    <option value="20s">20代</option>
                    <option value="30s">30代</option>
                    <option value="40s">40代</option>
                    <option value="50s">50代</option>
                    <option value="60s">60代</option>
                    <option value="over70">70歳以上</option>
                </select>
            </div>
        </div>
        <div class="qarea">
            <p class ="questionTitle">問3 家族構成をお答えください。</p>
            <div class="aarea">
                <div>
                    <input type="radio" id="single" name="family" value="single">
                    <label for="single">単身世帯</label>
                </div>
                <div>
                    <input type="radio" id="hoc" name="family" value="hoc">
                    <label for="hoc">夫婦のみ世帯</label>
                </div>
                <div>
                    <input type="radio" id="2gh" name="family" value="2gh">
                    <label for="2gh">二世代世帯</label>
                </div>
                <div>
                    <input type="radio" id="3gh" name="family" value="3gh">
                    <label for="3gh">三世代世帯</label>
                </div>
                <div>
                    <input type="radio" id="otherh" name="family" value="otherh">
                    <label for="otherh">その他</label>
                    <input type="text" name="">
                </div>
            </div>
        </div>
        <div class="qarea">
            <p class ="questionTitle">問4 家計について、どのように感じていますか。</p>
            <div class="aarea">
                <div>
                    <input type="radio" id="rich" name="budget" value="rich">
                    <label for="rich">余裕がある</label>
                </div>
                <div>
                    <input type="radio" id="bitrich" name="budget" value="bitrich">
                    <label for="bitrich">やや余裕がある</label>
                </div>
                <div>
                    <input type="radio" id="normal" name="budget" value="normal">
                    <label for="normal">普通</label>
                </div>
                <div>
                    <input type="radio" id="bitpoor" name="budget" value="bitpoor">
                    <label for="bitpoor">やや厳しい</label>
                </div>
                <div>
                    <input type="radio" id="poor" name="budget" value="poor">
                    <label for="poor">厳しい</label>
                </div>
            </div>
        </div>
        <div class="qarea">
            <p class ="questionTitle">問5 xx市は暮らしやすいと思いますか。</p>
            <div class="aarea">
                <div>
                    <input type="radio" id="stronglyYes" name="liveability" value="stronglyYes">
                    <label for="stronglyYes">そう思う</label>
                </div>
                <div>
                    <input type="radio" id="Yes" name="liveability" value="Yes">
                    <label for="Yes">ややそう思う</label>
                </div>
                <div>
                    <input type="radio" id="noIdea" name="liveability" value="noIdea">
                    <label for="noIdea">どちらとも言えない</label>
                </div>
                <div>
                    <input type="radio" id="No" name="liveability" value="No">
                    <label for="No">ややそう思わない</label>
                </div>
                <div>
                    <input type="radio" id="stronglyNo" name="liveability" value="stronglyNo">
                    <label for="stronglyNo">そう思わない</label>
                </div>
            </div>
        </div>
        <div class="qarea">
            <p class ="questionTitle">問6 近所との付き合いはどの程度していますか。</p>
            <div class="aarea">
                <div>
                    <input type="radio" id="helpEachOther" name="helpCommunity" value="helpEachOther">
                    <label for="helpEachOther">何か困った時に助け合える程度</label>
                </div>
                <div>
                    <input type="radio" id="Do" name="helpCommunity" value="Do">
                    <label for="Do">お互いに訪問し合う程度</label>
                </div>
                <div>
                    <input type="radio" id="lightlyDo" name="helpCommunity" value="lightlyDo">
                    <label for="lightlyDo">会ったら立ち話をする程度</label>
                </div>
                <div>
                    <input type="radio" id="littlebit" name="helpCommunity" value="littlebit">
                    <label for="littlebit">会ったら挨拶をする程度</label>
                </div>
                <div>
                    <input type="radio" id="nothing" name="helpCommunity" value="nothing">
                    <label for="nothing">ほとんど付き合いはない</label>
                </div>
            </div>
            <div class="qarea">
                <p class ="questionTitle">問7 現在抱えている地域が抱える問題点は何ですか。</p>
                <div class="aarea">
                    <div>
                        <input type="checkbox" id="selectorA" name="problems" value="selectorA">
                        <label for="selectorA">近所付き合いが減っていること・ないこと</label>
                    </div>
                    <div>
                        <input type="checkbox" id="selectorB" name="problems" value="selectorB">
                        <label for="selectorB">地域の関心のない人が多いこと</label>
                    </div>
                    <div>
                        <input type="checkbox" id="selectorC" name="problems" value="selectorC">
                        <label for="selectorC">地域活動への若い人の参加が少ないこと</label>
                    </div>
                    <div>
                        <input type="checkbox" id="selectorD" name="problems" value="selectorD">
                        <label for="selectorD">助け合い・支え合いが不足していること</label>
                    </div>
                    <div>
                        <input type="checkbox" id="selectorE" name="problems" value="selectorE">
                        <label for="selectorE">自治会の活動に参加しにくい雰囲気があること</label>
                    </div>
                    <div>
                        <input type="checkbox" id="selectorF" name="problems" value="selectorF">
                        <label for="selectorF">ひとり親家庭や障害者家庭などへの偏見があること</label>
                    </div>
                    <div>
                        <input type="checkbox" id="selectorG" name="problems" value="selectorG">
                        <label for="selectorG">他人に干渉されプライバシーが守られないこと</label>
                    </div>
                    <div>
                        <input type="checkbox" id="selectorH" name="problems" value="selectorH">
                        <label for="selectorH">身近な交通手段がないこと</label>
                    </div>
                    <div>
                        <input type="checkbox" id="selectorI" name="problems" value="selectorI">
                        <label for="selectorI">低所得（生活困窮）者が多いこと</label>
                    </div>
                    <div>
                        <input type="checkbox" id="selectorJ" name="problems" value="selectorJ">
                        <label for="selectorJ">福祉サービス（介護保険・障害福祉など）が不足していること</label>
                    </div>
                    <div>
                        <input type="checkbox" id="selectorK" name="problems" value="selectorK">
                        <label for="selectorK">その他</label>
                        <input type="text" name="free">
                    </div>
                    <div>
                        <input type="checkbox" id="selectorL" name="problems" value="selectorL">
                        <label for="selectorL">特にない</label>
                    </div>
                </div>
            </div>
<!--        <div class="qarea">
            <p class ="questionTitle">問8 お住まいの地域における暮らしの満足度についてお答えください。</p>
            <dd class="data_matrix">
                <table summary="matrix" border="1" cellspacing="0" cellpadding="5" bordercolor="#999">
                <colgroup span="1" style="width:40%; background:#ffffff;"></colgroup>
                <colgroup span="4" style="width:15%; background:#fff;"></colgroup>
                <thead style="text-align: center; background: #2FA6E9;">
                    <tr>
                        <th>&nbsp;</th><th>満足</th><th>やや満足</th><th>やや不満</th><th>不満</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>近隣との付き合い<span class="neighbor"></span></th>
                        <td>
                            <label>
                                <input class="input_matrix" type="radio" name="verySatisfied" value="1" $neighbor:r1$ title="verySatisfied">
                            </label>
                        </td>
                        <td>
                            <label>
                                <input class="input_matrix" type="radio" name="satisfied" value="2" $neighbor:r2$ title="satisfied">
                            </label>
                        </td>
                        <td>
                            <label>
                                <input class="input_matrix" type="radio" name="dissatisfied" value="3" $neighbor:r3$ title="dissatisfied">
                            </label>
                        </td>
                        <td>
                            <label>
                                <input class="input_matrix" type="radio" name="verydissatisfied" value="4" $neighbor:r4$ title="verydissatisfied">
                            </label>
                        </td>
                        <input type="hidden" value="" name="neighbor">
                    </tr>
                    <tr>
                        <th>自治会などの地域活動<span class="comunity"></span></th>
                        <td>
                            <label>
                                <input class="input_matrix" type="radio" name="verySatisfied" value="1" $comunity:r1$ title="verySatisfied">
                            </label>
                        </td>
                        <td>
                            <label>
                                <input class="input_matrix" type="radio" name="satisfied" value="2" $comunity:r2$ title="satisfied">
                            </label>
                        </td>
                        <td>
                            <label>
                                <input class="input_matrix" type="radio" name="dissatisfied" value="3" $comunity:r3$ title="dissatisfied">
                            </label>
                        </td>
                        <td>
                            <label>
                                <input class="input_matrix" type="radio" name="verydissatisfied" value="4" $comunity:r4$ title="verydissatisfied">
                            </label>
                        </td>
                        <input type="hidden" value="" name="comunity">
                    </tr>
                    <tr>
                        <th>近隣の生活マナーなどの生活環境<span class="manner"></span></th>
                        <td>
                            <label>
                                <input class="input_matrix" type="radio" name="verySatisfied" value="1" $manner:r1$ title="verySatisfied">
                            </label>
                        </td>
                        <td>
                            <label>
                                <input class="input_matrix" type="radio" name="satisfied" value="2" $manner:r2$ title="satisfied">
                            </label>
                        </td>
                        <td>
                            <label>
                                <input class="input_matrix" type="radio" name="dissatisfied" value="3" $manner:r3$ title="dissatisfied">
                            </label>
                        </td>
                        <td>
                            <label>
                                <input class="input_matrix" type="radio" name="verydissatisfied" value="4" $manner:r4$ title="verydissatisfied">
                            </label>
                        </td>
                        <input type="hidden" value="" name="manner">
                    </tr>
                    <tr>
                        <th>公園・緑地などの自然環境<span class="environment"></span></th>
                        <td>
                            <label>
                                <input class="input_matrix" type="radio" name="verySatisfied" value="1" $environment:r1$ title="verySatisfied">
                            </label>
                        </td>
                        <td>
                            <label>
                                <input class="input_matrix" type="radio" name="satisfied" value="2" $environment:r2$ title="satisfied">
                            </label>
                        </td>
                        <td>
                            <label>
                                <input class="input_matrix" type="radio" name="dissatisfied" value="3" $environment:r3$ title="dissatisfied">
                            </label>
                        </td>
                        <td>
                            <label>
                                <input class="input_matrix" type="radio" name="verydissatisfied" value="4" $environment:r4$ title="verydissatisfied">
                            </label>
                        </td>
                        <input type="hidden" value="" name="environment">
                    </tr>
                    <tr>
                        <th>買い物などの便利さ<span class="shopping"></span></th>
                        <td>
                            <label>
                                <input class="input_matrix" type="radio" name="verySatisfied" value="1" $shopping:r1$ title="verySatisfied">
                            </label>
                        </td>
                        <td>
                            <label>
                                <input class="input_matrix" type="radio" name="satisfied" value="2" $shopping:r2$ title="satisfied">
                            </label>
                        </td>
                        <td>
                            <label>
                                <input class="input_matrix" type="radio" name="dissatisfied" value="3" $shopping:r3$ title="dissatisfied">
                            </label>
                        </td>
                        <td>
                            <label>
                                <input class="input_matrix" type="radio" name="verydissatisfied" value="4" $shopping:r4$ title="verydissatisfied">
                            </label>
                        </td>
                        <input type="hidden" value="" name="●●●">
                    </tr>
                -->
                </tbody>
                </table>
            </dd>
        </div>
        <input type="submit" value="送信">
    </form>
</body>

</html>
