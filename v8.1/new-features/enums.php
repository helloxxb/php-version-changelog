<?php

// Enum 枚举
// BackedEnum
trait ExampleTrait
{
    public static function renderOptions(): string
    {
        $options = [];
        foreach (static::cases() as $case) {
            $options[] = sprintf('<option value="%s">%s</option>', $case->value, $case->label());
        }
        return join('\n', $options);
    }
}

function pick_method(HTTPMethods $methods): void
{
    var_dump($methods, $methods::cases(), $methods->name, $methods->value, $methods::from('get'), $methods::tryFrom('delete'));
}

pick_method(HTTPMethods::GET);
echo '------' . PHP_EOL;

interface Colorful
{
    public function color(): string;
}

enum HTTPMethods: string
{
    case GET = 'get';
    case POST = 'post';
}

// 使用 Suit Enum
function pick_card(Suit $suit): void
{
    var_dump(
        $suit,
        $suit->name,
        Suit::cases(),
        $suit::cases(),
        $suit::class,
        Suit::Clubs->color(),
        Suit::Clubs->shape(),
        $suit->shape()
    );
}

pick_card(Suit::Clubs);
echo '------' . PHP_EOL;

enum Suit implements Colorful
{
    // 梅花
    case Clubs;
    // 方块
    case Diamonds;
    // 红心
    case Hearts;
    // 黑桃
    case Spades;

    public function color(): string
    {
        // return match ($this) {
        //     self::Hearts, self::Diamonds => 'Red',
        //     self::Clubs, self::Spades => 'Black'
        // };
        // 效果一样
        return match ($this) {
            Suit::Hearts, Suit::Diamonds => 'Red',
            Suit::Clubs, Suit::Spades => 'Black'
        };
    }

    // 不是 interface 的一部分；也没问题
    public function shape(): string
    {
        return 'Rectangle';
    }
}

var_dump(
    Size::fromLength(5)->name,
    '--',
    Size::fromLength(50)->name,
    Size::fromLength(99)->name,
    '--',
    Size::fromLength(100)->name,
    Size::fromLength(199)->name,
    '--',
    Size::fromLength(200)->name,
    Size::fromLength(201)->name,
);
echo serialize(Size::Large) . PHP_EOL;
echo unserialize(serialize(Size::Large))->name . PHP_EOL;
echo '------' . PHP_EOL;


var_dump(enum_exists(Suit::class));
var_dump(enum_exists('delete'));
echo '------' . PHP_EOL;

enum Size
{
    case Small;
    case Medium;
    case Large;
    case _Huge;

    public const Huge = self::_Huge;

    public static function fromLength(int $cm): Size
    {
        return match (true) {
            $cm < 50 => Size::Small,
            $cm < 100 => Size::Medium,
            $cm < 200 => Size::Large,
            default => Size::Huge,
        };
    }
}

enum UserStatus: string
{
    use ExampleTrait;

    case Pending = 'P';
    case Active = 'A';
    case Suspended = 'S';
    case CanceledByUser = 'C';

    public function label(): string
    {
        return match ($this) {
            UserStatus::Pending => 'Pending',
            UserStatus::Active => 'Active',
            UserStatus::Suspended => 'Suspended',
            UserStatus::CanceledByUser => 'Canceled by user',
        };
    }
}

foreach (UserStatus::cases() as $case) {
    printf('<option value="%s">%s</option>\n', $case->value, $case->label());
}
echo PHP_EOL . UserStatus::renderOptions();
