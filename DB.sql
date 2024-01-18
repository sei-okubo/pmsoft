-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2024-01-18 07:51:16
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `pmsoft`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `text` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `articles`
--

INSERT INTO `articles` (`id`, `title`, `image`, `text`, `created_at`, `updated_at`) VALUES
(1, '第一生命ＨＤが初任給32万円に引き上げ、国内大手金融機関では最高に', 'img/wUhTLXu9sdScUPGz8rGPN7Tv3iOYqie6vX2CmrrD.jpg', '（ブルームバーグ）： 第一生命ホールディングス（ＨＤ）は2024年４月入社の新入社員に対する初任給を現在の27万6000円から32万1000円に引き上げる方針だ。国内大手金融機関で最高水準となる。人材の獲得競争が激しさを増す中、優秀な人材の確保や定着につなげる。\r\n\r\n広報担当者によると、初任給の引き上げは４年ぶり。大卒で転居を伴う転勤がある内勤職が対象で、引き上げ率は16％となる。労働組合との交渉を経て正式決定する。\r\n\r\n金融業界では優秀な人材確保を狙うほか、物価上昇などを背景に賃上げを求める政府の要請にも対応し、初任給を引き上げる動きが強まっている。第一生命ＨＤの菊田徹也社長は2030年度に現在の３倍超となる株式時価総額10兆円の目標を掲げる。グローバルな保険グループと伍（ご）していくためにも人的資本への投資を強化する。\r\n\r\n他の金融機関では、野村証券が24年度の初任給を24万5000円から26万5000円に引き上げる方針。23年に13年ぶりに初任給の引き上げを決めた三菱ＵＦＪ銀行は25万5000円で、三井住友銀行も同水準だ。証券や銀行も含めた国内大手金融の中で第一生命ＨＤの初任給が突出する。\r\n\r\n厚生労働省の調査によると22年の一般労働者の月額給与の平均は31万1800円（年齢43.7歳、勤続年数12.3年）で、入社と同時に国内平均も上回る水準となる。\r\n\r\n第一生命ＨＤは24年４月から転勤時の一時金も引き上げる。同伴家族の人数や構成に応じて金額を決め、同伴人数が１人以上の場合は従来より約30万円以上の増加となる。本人と配偶者の場合は40万円、３歳以上の子供がいる場合には45万円以上を支給する。\r\n\r\nまた、専門性の高い人材の獲得のため、25年４月入社の新卒採用から「資産運用」や「海外」「会計・税務」「ＩＴデジタル」と事業領域を事前に選ぶことのできる制度を導入する。入社から５年以内は特定のコース内で異動が行われ、６年目以降は本人の意向や適正などを勘案して異動する仕組みとする。', '2024-01-18 06:37:31', '2024-01-18 06:37:31'),
(2, 'NHK紅白歌合戦「けん玉チャレンジ」で唯一“失敗”した男性が初告白　「楽屋で100人以上の前で土下座しました」', 'img/gfi0rYNj11wbSQKcjgPU5Vf7eG07ZppGq34cgXOS.webp', '昨年大みそかの「第74回NHK紅白歌合戦」で恒例の「けん玉チャレンジ」が行われた。「けん玉チャレンジ」は2017年からスタートし、20年からは3年連続で成功中だった。昨年も、いったんは128人全員が成功したかに見えたが、約50分後、NHKは番組内で「映像を確認したところ残念ながら失敗していました」と説明。世界ギネス記録も取り消しになった。失敗したのは「16番」だった男性。年が明けた今、彼は何を思うのか。AERA dot.の取材に初めて胸中を語った。\r\n\r\n＊　　＊　　＊\r\n\r\n　都内の喫茶店に現れた「16番」は、ネクタイにスーツ姿のごく普通のサラリーマンだった。名前は「しゅんさん」。年齢は25歳だという。\r\n\r\n　しゅんさんは紅白の「けん玉チャレンジ」に出場することになった経緯をこう話始めた。\r\n\r\n「NHKからオファーがあったのは昨年12月に入ってからです。普段からけん玉を広げる活動に貢献している人を対象に、NHKが選んで声をかけていったようです」\r\n\r\n　しゅんさんは同年代のDすけさんと一緒にYouTubeチャンネル「もしかめブラザーズ」を2022年10月に開設。けん玉の技を披露する動画などをアップしてきた。\r\n\r\n「僕はもともと補欠要員で、誰か欠員が出たときに代わりに出場できるということでの参加でした」\r\n\r\n　紅白前日の12月30日。リハーサル時に体調不良になった男性が出たことで、しゅんさんに声がかかった。\r\n\r\n「30日夜のリハーサル終了後、運営の方から『代わりに参加してください』と言われました。それで、その男性がつける予定だった『16番』を僕が代わりに背負うことになったという経緯です」\r\n\r\n■「なんか、ザワついているな」\r\n\r\n　歴史にif（もしも）はないと言うが、予定通り、正式メンバーが出場していたら、しゅんさんの出番はなかった。人生、何が起こるかわからない。\r\n\r\n　当日になって出場を告げられたしゅんさんは何を思ったのか。\r\n\r\n「急に言われて、ドキッとはしたんですけど、僕はおととし出場していて、その時は成功したんですよ。だから、落とすかもしれないみたいな不安は全然なかったです。当然、成功するつもりでした」\r\n\r\n　体調は万全。本番当日の練習にも参加して、あとは本番を待つのみだった。\r\n\r\n「けん玉チャレンジ」が行われる三山ひろしの曲「どんこ坂～第7回けん玉世界記録への道～」が始まったのは午後10時過ぎ。「けん玉ヒーローズ」のメンバー128人がステージに上がっていく。10人目までなら1回だけなら失敗してもやり直しがきくというルールで、3番目の「パンサー」尾形貴弘が失敗。最初からやり直す場面があったが、尾形は2度目は成功させた。\r\n\r\n　NHKホールの大観衆の前でけん玉が始まると、しゅんさんは徐々に緊張を感じるようになった。\r\n\r\n「本番の時は、尾形さんが落とした場面は見られなくて、『あれっ、なんかザワついているな』と思っていたら、もう自分の番だみたいな感じで『あ、ヤバイ』と思いました」\r\n\r\n　しゅんさんの位置は、平場ではなく、階段を数段上がった端っこ。けん玉がやりやすい場所には見えない。\r\n\r\n「おととしも階段の位置で成功させた経験があるので、正直、自分の中では問題ありませんでした。運営の方も、事前に『もし不安要素があったら、やりやすい場所の番号と交換します』という対応をしてくれましたが、僕はそれは必要ないという認識でした」\r\n\r\n■玉が左側にこぼれ落ちた\r\n\r\n　けん玉は、階段をジグザグに昇りながら進んで行った。16番のしゅんさんの場所まで、玉がどんどん迫ってくる。\r\n\r\n「階段の上ですから、前の方でけん玉をしている人は背中だけが見えて、けん玉をしているところは見えないんです。だから、体の動きから雰囲気で感じ取って、自分が動くという形でした。タイミングが取りづらいなとは感じました。照明もまぶしくて、音も大きくて、緊張で自分の心臓の鼓動が聞こえました。キメなきゃという一心でした」\r\n\r\n　しかしチャレンジは失敗……その瞬間、玉は左側にこぼれ落ちている。\r\n\r\n「会場の雰囲気にのまれて、平衡感覚を失ってしまい、やる前にふらついてしまっていました。玉を上げた時、自分としてはまっすぐのつもりだったんですけど、ちょっとズレていたんですよね。そのまま乗っけようとしたら、玉が皿のふちにカンと当たって、はじいてしまった。頭が真っ白になりました。ワーッどうしようと思ったけれど、こぼれた玉は手で皿に乗せて正面を向きました。それからは落とした実感がどんどん沸いてきて、手が震えてきました」\r\n\r\n　失敗した時の手順は、事前に運営側から決められていたという。\r\n\r\n「あくまで、三山さんのバックダンサーという演出なので、特に成功、失敗で表情を変えてはいけない。もし、失敗してしまったら、手で玉を乗せて、真顔で正面を向いているという演出でした。チーム全体をきれいに見せるための演出なので、僕が失敗しても、その後も続くのは間違いではありませんでした」\r\n\r\n■相方も一緒に土下座してくれた\r\n\r\n　最後に、三山が大皿に玉を乗せると、ギネス審判員からいったんは「世界ギネス記録」に認定されたが、審判員がモニターで確認したところ、しゅんさんの失敗が判明。約50分後には番組内で記録が取り消された。\r\n\r\n　SNS上では「紅白けん玉失敗したよね？ 16番の人」などと投稿され、ギネス取り消し後には「けん玉失敗した16番の人、責める人もいるけど何も言えなくなった」「16番の人がいたたまれない」などの投稿などが一斉に上がり、Xでは「けん玉失敗」がトレンド入りした。\r\n\r\n　終了後、けん玉ヒーローズがガッツポーズをした時にしゅんさんも一緒にガッツポーズをしていた映像が残っている。そのため、「16番は失敗を自覚してるはずなのに、なぜガッツポーズしているのか」という投稿もあった。\r\n\r\n「僕はみんなより1秒くらい遅れてガッツポーズをしているんです。あれは成功した時のシチュエーションが決まっていたからです。三山さんが勝どきを上げるので、みんなでエイエイオーと言うことになっていました。その場合は『喜んでください』という指示がありました。失敗した時にはリアクションなしと決まっていたんですが、みなさんはほぼ誰も僕の失敗を気づいていなかったようで、本気で喜んでいました。僕としては、何が何だかわからない状態でした」\r\n\r\n　会場を引き上げた後、運営側から「モニターでの確認が入るので楽屋の外でこのままお待ちください」と言われ、しゅんさんと相方のDすけさん、それにもう1人の仲間のプレーヤー3人で、楽屋の外で待っていた。すると、失敗のアナウンスがあり、チャレンジ失敗が判明した。\r\n\r\n「僕が楽屋に戻ると、100人以上のメンバーが全員座って待っていました。みなさんに謝りたいという気持ちが真っ先に出て、『すいませんでした』とその場でいきなり土下座しました。相方のDすけは自分は成功したのに一緒に土下座してくれた。みんな誰一人、僕を責める人はいなくて、逆に拍手してくれました。『落ち込まないで』『今後も辞めないで続けてほしい』と励まされました。DJ KOOさんはハグをしてくださり、『落ち込まないで次も挑戦してほしい』と言ってお菓子をくれました。本当にみんな温かくて、それで救われたところがありました」\r\n\r\n■次の紅白でもチャレンジしたい\r\n\r\n　とはいえ、しゅんさんは年始はかなり落ち込んでいたという。\r\n\r\n「1月3日くらいまで、ずっと部屋にいて、布団の中で引きこもっていました。でも『このままではいけない』と思って、家族やいろんな人と話すうちに、気が楽になった。現在は普通に仕事をしています」\r\n\r\n　周囲からは「謝らなくていい」とさんざん言われた。\r\n\r\n「でも、僕は謝らなくてはいけないと思っていて、チーム全員で挑戦しているからこそ、謝罪も必要な工程です。かといって、ずっと暗くしていてはみなさんに悪い印象を与えてしまうし、これからけん玉を始めようとする人がどんどん離れていってしまう。なので、きちんと謝る姿勢は示したうえで、活動を楽しく続けていくのが僕の使命だと思うようになりました」\r\n\r\n　しゅんさんは「もしかめブラザーズ」を通じて、けん玉を広める活動をしている。東京・足立区の商店街で通行人に声をかけて一緒にけん玉をしたり、やったことがない人にけん玉の魅力を伝えたりしている。\r\n\r\n「私はけん玉を始めてからまだ2年ですが、けん玉というツールがあることで、知らない人とでもどんどん仲良くなれるし、日々、新たな発見があります。けん玉は自分一人で完結することもできますが、誰かと一緒に練習することもできます。気軽に始められるし、いろんな人と出会えて、自分の居場所を持てるのはすごくいいところだと思います」\r\n\r\n　そして、最後にこう締めくくった。\r\n\r\n「紅白で落としたという事実とはこの1年間ずっと向き合っていくことになると思います。だからこそ、成功するまでは絶対に辞められない。次に挑戦するまでは、絶対にこの気持ちは変わりません。次の紅白で『けん玉チャレンジ』があるかはわかりませんが、あったらぜひ挑戦したいですね。成功したら気持ちが晴れるだろうし、もしまた失敗しても、僕が前向きにけん玉を楽しんでいる姿をみなさんに見ていただきたいです」\r\n\r\n　次の紅白では、失敗から這い上がったしゅんさんのガッツポーズを見てみたい。\r\n\r\n（AERA dot.編集部・上田耕司）', '2024-01-18 06:40:22', '2024-01-18 06:40:22'),
(3, '被災したのに保険金がおりない？ 意外と知らない「地震保険」の基本をプロが徹底解説', 'img/BbHWdUZDr9k2H1Rz7JDkFiDcK01J7RaN36aR1NmC.png', '今回の能登半島地震で被害が目立った地割れや、給水設備等の破損による水漏れは地震保険の対象となるのだろうか？\r\n\r\nもしくは、所有物件が傾くなどして人が住めない状態になった場合、入居者の住居確保費用や家賃損失は、地震保険の補償対象となるのだろうか？\r\n\r\n地震保険は火災保険よりも加入率が低く、火災保険とのちがいについてあまりよく知らないという人も多いかもしれない。\r\n\r\n大家さん専門保険コーディネーターの斎藤慎治さんに、今こそ知っておきたい地震保険のポイントを聞いた。\r\n\r\n火災保険と地震保険のちがい\r\n―不動産オーナーの中には、地震保険には入っていないという人もいますが、そもそも火災保険と地震保険はどのようなちがいがあるのでしょうか？\r\n\r\nまず、補償内容が大きく異なります。地震保険でしかカバーできない被害の代表例として、地震による建物の倒壊、および地震による火災、津波、それと噴火が挙げられます。これらの災害による建物の被害は火災保険の補償対象外となります。\r\n\r\n東日本大震災をはじめ、全国各地で地震により大きな被害が相次いでいることを背景に、地震保険を付帯した人の割合は全国平均で69.4%（2022年度）と、過去最高を更新しました。 \r\n\r\n補償内容以外にもさまざまなちがいがあります。主なちがいを下の表にまとめておきます。\r\n\r\n\r\n\r\n―今から地震保険に加入するには？\r\n\r\n前提として、地震保険は火災保険に付帯する形でしか加入することができません。地震保険単独では加入できないということです。火災保険の契約と同時に地震保険を付けることもできますし、火災保険だけでスタートした場合でも後から地震保険を付けることもできます。\r\n\r\n―保険金支払い方法のちがいは？\r\n\r\n火災保険との大きなちがいとしては、火災保険は実際に修繕にかかった費用を補償する「実損払い」であるのに対し、地震保険は実際にかかる費用に関係なく、認定された損害の程度によって一定額が支払われる仕組みです。再建や修繕費用の全額を保険金で賄えるとは限らない点は、注意していただきたいです。\r\n\r\nそもそも地震保険は火災保険の設定金額に対して30～50％の範囲でしか設定できません。例えば、火災保険の契約金額を1億円に設定した場合、地震保険は3000万～5000万円の範囲で設定することになります。\r\n\r\n一方で、地震保険は火災保険に比べて保険料が高い傾向があります。建物構造や地域にもよりますが、目安として火災保険の2～4倍と考えておくとよいでしょう。\r\n\r\n地割れ被害や家賃損失は補償される？\r\n―所有物件が地震で被災した場合、建て替えや修繕に多額の費用がかかるケースもあるかと思います。地震保険金でどの程度まかなえると考えればよいのでしょうか？\r\n\r\n先ほど述べたとおり、地震保険は火災保険とちがって「実損払い」ではありません。保険金支払いの対象となる損害の程度は「全損」「大半損」「小半損」「一部損」の4つに分類され、それぞれ保険金設定金額に対して支払い割合が決まっています。ですから、再建費用を全額まかなえるわけではありません。\r\n\r\n\r\n地震保険の損害認定の分類\r\n\r\n地震保険の保険金額は、火災保険の50％を上限に設定できますが、これを100として「全損」なら100％、「大半損」なら60％、「小半損」なら30％、「一部損」なら5%が支払われます。その中間はありません。なお、1戸あたりの地震保険金の限度額は建物5000万円、家財1000万円となっています。\r\n\r\n―損害の割合はどのように決まるのですか？\r\n\r\n損害の認定基準については、日本損害保険協会がさらに詳細な基準に定めています。この基準に沿って、鑑定人は現地で建物を目視などにより調査し、コンクリートの剥がれがあるのか、鉄筋が見えているのかなどをチェックしていきます。\r\n\r\nそういった細かいところまでを見て、最終的に4分類のどれに該当するかを査定します。ですから、火災保険とちがって、実際にいくらかかるかという見積もりは不要なんですね。\r\n\r\n―なるべく多く保険金を受け取るには？\r\n\r\nこのように、地震保険金は最大でも火災保険金の50％までしか支払われません。万が一に備えてそれ以上の補償を必要とする場合は、火災保険の特約で「地震火災費用保険金」というものがあります。\r\n\r\n地震火災費用保険金の補償は、基本は火災保険金額の5%までですが、最大で50%まで引き上げることもでき、地震保険金と合わせて100%にできるケースもあります。また、保険会社によっては地震保険を100%までかけられる商品もありますが、いずれにしても保険料はかなり高額になるため、費用対効果を考えて決めるのがよいでしょう。\r\n\r\n―実際に地震が起きて建物が被災した場合、どのような流れで保険金が支払われるのでしょうか？\r\n\r\n原則として、鑑定人による現地の立ち会い調査が必要になります。地震から72時間以内に起きた損害は火災によるものなども地震関連の被害と認定されます。\r\n\r\n今回の能登半島地震のように道路が寸断されるなどした場合、鑑定人が現地に入れないことも想定されます。そのような場合、壊滅的な被害があったことが明らかな地域については、鑑定人による調査なしで認定されるケースもあります。被災者への保険金の支払いは早ければ認定から1週間程度で行われます。\r\n\r\n―今回の地震では、敷地の地割れなどが発生したにもかかわらず地震保険の対象とならなかったケースもあるそうです。地震保険の補償対象外となってしまうのはどのようなケースなのでしょうか？\r\n\r\n地震保険は基本的に建物にかける保険ですので、実は土地の損害というのは対象外なんですね。例えば、建物は無傷だったけど、土地は半分崩れてしまったような場合です。\r\n\r\nこのような場合、地震保険では損害が認定されません。ただし、土地が崩れたり、地割れが起きたりしたことで、建物が傾くなどの被害があれば地震保険の対象となります。ちなみに、自治体が発行する「罹災証明書」の被害認定と、地震保険の損害の認定はまったく関係ありません。\r\n\r\n地震保険では建築基準法に定める主要構造部（屋根、 外壁　柱、はり、基礎）のみが査定の対象となっています。例えば、外壁ではなくて屋内の間仕切り壁などは地震による被害があってもそもそも査定の対象外ですから、保険金が支払われません。\r\n\r\n―給水設備が損傷して建物が水浸しになってしまったら？\r\n\r\n同様に付属設備も対象外です。例えば、エアコンの室内機や給湯器、配管などですね。今回の地震でも配管が壊れて水漏れが発生したといった被害が多かったようですが、残念ながら地震保険では補償されません。\r\n\r\nそれから、居住用スペースがない物件は、そもそも地震保険に加入できません。例えば、すべてがオフィスですとか、店舗のような建物です。あと民泊も居住用ではないので、対象外です。\r\n\r\n裏を返せば、一部でも居住用スペースがあれば建物全体が補償の対象になります。例えば、5階建ての建物の4階までが全部商業用のであったとしても、最上階に住む場所があればOKということです。\r\n\r\n―今回の地震では所有するアパートが倒壊の危険があると認定され、全室退去を余儀なくされたオーナーもいました。このようなケースで、入居者の住居確保費用や家賃損失は地震保険で補償されるのでしょうか？\r\n\r\nそういった費用は一切補償の対象になりません。繰り返しになりますが、地震保険はあくまでも建物の損傷に応じて一定額が支払われる仕組みなのです。 \r\n\r\nただ、地震保険金は使途にはまったく制限がありませんので、建物の再建や修理以外の費用に充てるのは受け取った方の自由です。\r\n\r\n再建ができそうにないとか、再建をする予定がない場合は、そういった入居者への支援に充ててもよいでしょう。再建を目指すのであれば、保険金を頭金に次のアパートローンを組む方法もあるでしょう。\r\n\r\nもしくは、保険金を建物取り壊し費用に充てて、土地のみを売却するという話も聞きます。\r\n\r\n賃貸業は保険によって地震のリスクをカバーできる数少ない業種だと言えます。町工場や店舗の場合は地震保険をかけることはできませんが、賃貸業は居住用のため保険をかけることができるのです。\r\n\r\n地震保険料は火災保険の2倍以上\r\n―地震保険は火災保険に比べて保険料が高いと聞きますが、実際どのくらいかかるのでしょうか？\r\n\r\n地震保険料は、地域や建物構造、築年数などによって変わりますが、火災保険の2～4倍ほどになるケースがほとんどです。\r\n\r\n先ほど述べたとおり、地震保険は最大でも火災保険の50％までしか保険金額を設定できませんが、保険金額が半分なのに保険料は2倍以上ということもあるんですね。つまり、火災保険と同額の保険金額に換算すると4倍以上ということになります。\r\n\r\n\r\n\r\n地震保険料が高い要因の1つは、同時多発的に集中して被害が発生するためです。火災のように極めて狭い地域で起きる災害とは性質が違うわけですね。何でもかんでも保険金を払うということは難しいのです。\r\n\r\n建物を直して住めるようにするというよりは、被災者の当面の生活の安定を図るものと位置づけられているので、ある意味「広く浅く」補償する形になっているのです。\r\n\r\n―地震保険の保険料を少しでも安く抑えるには、どうしたらよいでしょうか？\r\n\r\n地震保険には割引制度があり、最大で50％の割引が適用されます。50％の割引対象となるのは、耐震等級3の建物、もしくは「免震建築物」の基準に適合する建物です。\r\n\r\nほかにも建築年割引、耐震診断割引などがあり10～50％の割引となります。ただし、他の割引との併用はできません。\r\n\r\n\r\n\r\nこれらの割引は、比較的築年数の浅い建物が対象となりやすく、築古の建物ほど保険料は高くなります。\r\n\r\nまた、エリアによっても保険料が大きく異なります。下の図の通り、都道府県ごとに1～3等地までに分けられていて、3等地の保険料が最も高いです。\r\n\r\n\r\n\r\n3等地の中でも最も高いのは、東京、神奈川、静岡です。南海トラフ地震を想定をしてこの等地分けをしていますので、エリアによって保険料にかなり幅があります。\r\n\r\n今回の能登半島地震の被災地域は比較的地震のリスクが低く、保険料も低い1等地となっていました。ただし、この区分も定期的に見直されていますので、現在は保険料が低いエリアでも今後は高くなる可能性もあります。\r\n\r\n◇\r\n\r\n多くの建物が倒壊するなどした能登半島地震を受けて、関心が高まっている「地震保険」について、基本的なポイントをまとめた。\r\n\r\n地震保険は、火災保険ではカバーできない損害が補償される一方、給水設備の損傷による水漏れや、被災したアパートで退去が発生した場合の家賃損失などでオーナーの負担が増えても保険がおりない。\r\n\r\nどういった損害が地震保険で補償されるのか、万が一被災した場合に賃貸経営のリスクを地震保険でどの程度減らしたいのかなどを明確にしておくことが重要だ。', '2024-01-18 06:42:59', '2024-01-18 06:42:59');

-- --------------------------------------------------------

--
-- テーブルの構造 `expenditures`
--

CREATE TABLE `expenditures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `expenditure_name` varchar(255) NOT NULL,
  `frequency` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `expenditures`
--

INSERT INTO `expenditures` (`id`, `expenditure_name`, `frequency`, `amount`, `property_id`, `created_at`, `updated_at`) VALUES
(1, '清掃', 1, 5000, 1, '2024-01-18 06:50:09', '2024-01-18 06:50:09'),
(2, '共用部電気代', 1, 10000, 1, '2024-01-18 06:50:09', '2024-01-18 06:50:09');

-- --------------------------------------------------------

--
-- テーブルの構造 `incomes`
--

CREATE TABLE `incomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `income_name` varchar(255) NOT NULL,
  `frequency` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `incomes`
--

INSERT INTO `incomes` (`id`, `income_name`, `frequency`, `amount`, `property_id`, `created_at`, `updated_at`) VALUES
(1, '駐車場', 1, 20000, 1, '2024-01-18 06:50:09', '2024-01-18 06:50:09'),
(2, '自販機', 1, 1000, 1, '2024-01-18 06:50:09', '2024-01-18 06:50:09');

-- --------------------------------------------------------

--
-- テーブルの構造 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_11_23_122712_create_properties_table', 1),
(7, '2023_12_12_193011_create_user_tokens_table', 2),
(8, '2023_12_19_060538_create_properties_table', 3),
(9, '2023_12_19_134154_create_income_table', 4),
(10, '2023_12_19_134210_create_expenditure_table', 4),
(11, '2023_12_19_135017_create_incomes_table', 5),
(12, '2023_12_19_135022_create_expenditures_table', 5),
(13, '2024_01_05_125823_create_articles_table', 6),
(14, '2024_01_06_123458_create_user_articles_table', 6),
(15, '2024_01_06_123916_add_users_table_1columns', 7);

-- --------------------------------------------------------

--
-- テーブルの構造 `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `property_name` varchar(255) NOT NULL,
  `capital` int(11) NOT NULL,
  `expense` int(11) NOT NULL,
  `loan` int(11) NOT NULL DEFAULT 0,
  `loan_period` int(11) NOT NULL DEFAULT 0,
  `interest` int(11) NOT NULL DEFAULT 0,
  `rent` int(11) NOT NULL,
  `fixed_expenditure` int(11) NOT NULL DEFAULT 0,
  `repay` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `properties`
--

INSERT INTO `properties` (`id`, `user_id`, `property_name`, `capital`, `expense`, `loan`, `loan_period`, `interest`, `rent`, `fixed_expenditure`, `repay`, `created_at`, `updated_at`) VALUES
(1, 2, 'とても良いアパート', 5000000, 1700000, 30000000, 35, 2, 160000, 0, 99378, '2024-01-18 06:50:09', '2024-01-18 06:50:09');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `del_flug` int(11) NOT NULL DEFAULT 0 COMMENT '削除判定',
  `role` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `del_flug`, `role`, `created_at`, `updated_at`) VALUES
(1, '管理 太郎', 'kanri@com.jp', '$2y$12$kTPVbYg7ZshSf6wzN5RXT..vTTi4ZjOmCpo8mWzaMDedR4z3Wc2ym', 0, 1, '2024-01-18 06:17:48', '2024-01-18 06:17:48'),
(2, '一般 次郎', 'test.test@com.jp', '$2y$12$IV7YwsFZH0Z.moUyKBnIzOB/iI65tdNOpTGmTbR.WncY0l4UJkVyy', 0, 0, '2024-01-18 06:19:25', '2024-01-18 06:19:25');

-- --------------------------------------------------------

--
-- テーブルの構造 `user_tokens`
--

CREATE TABLE `user_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL COMMENT 'ID',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(255) NOT NULL COMMENT 'トークン',
  `expire_at` datetime DEFAULT NULL COMMENT 'トークンの有効期限',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='ユーザートークン';

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `expenditures`
--
ALTER TABLE `expenditures`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `incomes`
--
ALTER TABLE `incomes`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- テーブルのインデックス `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- テーブルのインデックス `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_tokens_token_unique` (`token`),
  ADD KEY `user_tokens_user_id_foreign` (`user_id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- テーブルの AUTO_INCREMENT `expenditures`
--
ALTER TABLE `expenditures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- テーブルの AUTO_INCREMENT `incomes`
--
ALTER TABLE `incomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- テーブルの AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- テーブルの AUTO_INCREMENT `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- テーブルの AUTO_INCREMENT `user_tokens`
--
ALTER TABLE `user_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID';

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
